<div style="margin: 10px; display: flex; justify-content: center;">
    {!! QrCode::size(300)->generate("http://localhost/customers/{$customer->id}") !!}
</div>