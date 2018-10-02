<!DOCTYPE html>
<html>
<head>
	<title>Chatroom</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css' )}}">
	<script src="https://js.pusher.com/4.1/pusher.min.js"></script>
</head>
<body>
	<span class="current-user">{{ auth()->user()->name }}</span>
	<div id="app">
		<h1>Chartroom</h1>
		<chat-log :messages="messages"> </chat-log>
		<chat-composer v-on:messagesent="addMessage"></chat-composer>
	</div>


	<script src="{{ asset('js/app.js' )}}"></script>
</body>
</html>