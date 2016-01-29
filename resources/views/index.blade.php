@extends('layouts.master')

@section('title')
Twilio Chat
@endsection

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <div class="row"><div id="logo-column" class="col-md-2 col-md-offset-5">
        <img id="logo-image" src="{{ asset('img/twilio-logo.png') }}"/>
      </div></div>
      <div id="status-row" class="row">
        <div class="col-md-12 right-align">
          <span id="status-span">Connected as <b><span id="username-span"></span></b></span>
          <span id="leave-span"><b>x Leave</b></span>
        </div>
      </div>
    </div>
  </div>
  <div id="container" class="row">
    <div id="channel-panel" class="col-md-offset-2 col-md-2">
      <div id="channel-list" class="row"></div>
      <div class="row"><p id="new-channel-input" class="channel-element" contenteditable="true"></p></div>
      <div class="row"><img id="add-channel-image" src="{{ asset('img/add-channel-image.png') }}"/></div>
    </div>
    <div id="chat-window" class="col-md-4 with-shadow">
      <div id="message-list" class="row"></div>
      <div id="input-div" class="row">
        <textarea id="input-text" disabled="true" placeholder="   Your message"></textarea>
      </div>
      <div id="connect-panel" class="row with-shadow">
        <div class="row">
          <div class="col-md-12">
            <label for="username-input">Username: </label><input id="username-input" type="text" placeholder="username"/>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <img id="connect-image" src="{{ asset('img/connect-image.png') }}"/>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/html" id="message-template">
  <div class="row no-margin">
    <div class="row no-margin message-info-row" style="">
      <div class="col-md-8 left-align"><p data-content="username" class="message-username"></p></div>
      <div class="col-md-4 right-align"><span data-content="date" class="message-date"></span></div>
    </div>
    <div class="row no-margin message-content-row">
      <div style="" class="col-md-12"><p data-content="body" class="message-body"></p></div>
    </div>
  </div>
</script>
@endsection
