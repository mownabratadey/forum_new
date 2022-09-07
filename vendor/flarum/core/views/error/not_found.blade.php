@extends('flarum.forum::layouts.basic')

@section('content')
<img style="width: 400px" src="/assets/new-stite.png">
  <p>
    {{ $message }}
  </p>
  <h3>
    <a style="color:red" href="https://freeperfectmoney.com/faucets/bitcoin-faucet.php">
     Go to New Hourly Bitcoin Faucet
    </a>
  </h3>
  <h2>
    <a href="{{ $url->to('forum')->base() }}">
      {{ $translator->trans('core.views.error.not_found_return_link', ['forum' => $settings->get('forum_title')]) }}
    </a>
  </h2>
@endsection
