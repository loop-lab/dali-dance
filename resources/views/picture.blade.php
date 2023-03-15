
<div style="margin: 10px; display: flex; justify-content: center;">
    {!! QrCode::size(300)->generate("https://dali-dance.ru/customers/{$customer->id}/edit") !!}
</div>