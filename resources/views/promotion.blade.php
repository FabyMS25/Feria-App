<!-- Implement your user selection interface here -->
<h1>Select Users for Promotion</h1>
<!-- Example form for selecting users -->
<form action="{{ route('send-promotion-notification', $post->id) }}" method="POST">
    @csrf
    <!-- Implement your user selection controls here -->
    <button type="submit">Send Notification</button>
</form>
