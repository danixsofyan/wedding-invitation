<div>
    @foreach ($wish as $item)
    <div class="alert-box alert-box--notice">
        <span><b>{{ $item->name }}</span></b>
        <br>
        <span>{{ $item->comment }}</span>
    </div>
    @endforeach
</div>
