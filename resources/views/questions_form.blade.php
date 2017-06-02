<form action="/answer" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        @if(Auth::user()->role == "admin"):
            <label for="question">¿Qué te gustaría que agregaramos al informe?</label>    
            <textarea id="question" class="form-control" rows="3" name="answer"></textarea>
        @elseif(Auth::user()->role == "user"):
            <label for="question">¿La información es correcta?</label>    
            <select name="answer" class="form-control">
                <option value="si">Si</option>
                <option value="no">No</option>
                <option value="mas_o_menos">Mas o menos</option>                
            </select>
        @elseif(Auth::user()->role == "visita"):
            <label for="question">¿Del 1 al 5, es rapido el sitio?</label>    
            <select name="answer" class="form-control">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        @endif
    </div>  
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>