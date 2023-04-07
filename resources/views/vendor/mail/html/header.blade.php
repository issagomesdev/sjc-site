<tr>
<td class="header">
  <a href="{{ route("home") }}" style="display: inline-block;">
  @if (trim($slot) === 'Laravel')
  <img src="http://sjcsistemas.com.br/imagens/sjc_logo.png" class="sjc-logo" style="max-width: 30%; -webkit-filter: drop-shadow(-1px 1px 1px black) drop-shadow(-1px -1px 3px black);
  }" alt="SJC Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
