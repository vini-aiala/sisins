<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Associação Share')
<img src="https://associacaoshare.com.br/img/share-logo.png" class="logo" alt="Share">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
