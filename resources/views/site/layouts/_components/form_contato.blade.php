

<form    action="{{route('site.contato')}}" method="post">
    @csrf
    <input name="name" type="text" placeholder="Nome" class="{{$class}}">
    <br>
    <input name="telefone" type="text" placeholder="Telefone" class="{{$class}}">
    <br>
    <input name="email" type="text" placeholder="E-mail" class="{{$class}}">
    <br>
    <select name="motivo-contato" class="{{$class}}">
        <option value="0" >Qual o motivo do contato?</option>
        <option value="1" selected>Dúvida</option>
       <!-- <option value="3">Elogio</option> -->
       <!-- <option value="4">Reclamação</option> -->
    </select>
    <br>
    <textarea class="{{$class}}">Preencha aqui a sua mensagem</textarea>
    <br>
    <button type="submit" class="{{$class}}">ENVIAR</button>
</form>