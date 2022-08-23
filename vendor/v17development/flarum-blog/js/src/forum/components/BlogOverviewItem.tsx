import Component from 'flarum/common/Component';
import Link from 'flarum/common/components/Link';
import Tooltip from 'flarum/common/components/Tooltip';
import humanTime from 'flarum/common/helpers/humanTime';
import icon from 'flarum/common/helpers/icon';
import Discussion from 'flarum/common/models/Discussion';
import classList from 'flarum/common/utils/classList';
import ItemList from 'flarum/common/utils/ItemList';
import app from 'flarum/forum/app';
import type Mithril from 'mithril';

interface Attrs {
  article: Discussion;
  defaultImage: string;
}

export default class BlogOverviewItem extends Component<Attrs> {
  titleItems(): ItemList<Mithril.Children> {
    const { article } = this.attrs;

    const items = new ItemList<Mithril.Children>();

    items.add('title', <>{article.title()}</>, 100);

    if (article.blogMeta()?.isPendingReview?.() || article.isHidden()) {
      items.add('hidden', icon('fas fa-eye-slash', { class: 'BlogList-item-hidden' }), 80);
    }

    if (article.blogMeta()?.isPendingReview?.()) {
      items.add(
        'pendingReview',
        <Tooltip text={app.translator.trans('v17development-flarum-blog.forum.review_article.pending_review')}>
          {icon('far fa-clock', { class: 'BlogList-item-pendingReview' })}
        </Tooltip>,
        40
      );
    }

    return items;
  }

  dataItems(): ItemList<Mithril.Children> {
    const { article } = this.attrs;

    const items = new ItemList<Mithril.Children>();

    items.add(
      'createdAt',
      <span class="BlogList-item-details-createdAt">
        {icon('far fa-clock')} {humanTime(article.createdAt())}
      </span>,
      100
    );

    items.add(
      'author',
      <span class="BlogList-item-details-author">
        {icon('far fa-user')} {article.user()?.displayName?.() || app.translator.trans('core.lib.username.deleted_text')}
      </span>,
      80
    );

    items.add(
      'replies',
      <span class="BlogList-item-details-replies">
        {icon('far fa-comment')} {(article.commentCount() || 1) - 1}
      </span>,
      60
    );

    return items;
  }

  contentItems(): ItemList<Mithril.Children> {
    const { article } = this.attrs;
    const summary = article.blogMeta()?.summary?.() || '';

    const items = new ItemList<Mithril.Children>();

    items.add('title', <h4>{this.titleItems().toArray()}</h4>, 100);

    if (summary) items.add('summary', <p>{summary}</p>, 80);

    items.add('data', <div class="data">{this.dataItems().toArray()}</div>, 60);

    return items;
  }

  getImage(): string {
    const { article, defaultImage } = this.attrs;

    return article.blogMeta()?.featuredImage?.() ? `url(${article.blogMeta().featuredImage()})` : defaultImage;
  }

  view(vnode: Mithril.Vnode<Attrs, this>) {
    const { article, defaultImage } = this.attrs;

    const blogImage = this.getImage();

    const isSized = article.blogMeta()?.isSized?.();

    return (
      <Link
        href={app.route('blogArticle', {
          id: `${article.slug()}`,
        })}
        className={classList(
          'BlogList-item',
          {
            'BlogList-item-sized': isSized,
            'BlogList-item-default': !isSized,
          },
          article.tags().map((tag) => `BlogList-item-category-${tag.id()}`)
        )}
      >
        <div
          class={classList('BlogList-item-photo', {
            'FlarumBlog-default-image': blogImage === defaultImage,
          })}
          style={{ backgroundImage: blogImage }}
        />

        <div class="BlogList-item-content">{this.contentItems().toArray()}</div>
      </Link>
    );
  }
}
