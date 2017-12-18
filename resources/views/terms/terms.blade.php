<p>
    Mussum Ipsum, cacilds vidis litro abertis. Atirei o pau no gatis, per gatis num morreus. Casamentiss faiz malandris se pirulitá. Praesent malesuada urna nisi, quis volutpat erat hendrerit non. Nam vulputate dapibus. Suco de cevadiss deixa as pessoas mais interessantis.
</p>
<form method="post" action="{{route('terms.accept')}}">
    <input type="hidden" name="_token"  value="{!!csrf_token()!!}">
    <label>
        <input type="checkbox" name="acceptTerms" value="true">Aceito
    </label>
    <button type="submit">Salvar</button>
</form>