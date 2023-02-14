<div class="row">
    <div class="col s12 m3">
        <div class="card">
            <div class="card-image">
                <img src="https://picsum.photos/200">
                <span class="card-title">{{ $person->name }}</span>
            </div>
            <div class="card-content">
                <div>ID: {{$person->id}}</div>
                <p>Pavarde: {{ $person->surname }}</p>
                <p>Asmens kodas: {{ $person->personal_code }}</p>
                <p>Telefonas: {{ $person->phone }}</p>
                <p>Creation date: {{ $person->created_at }}</p>
                <p>Last updated: {{ $person->updated_at }}</p>
            </div>
            <div class="card-action">
                <a href="{{ route('persons.edit', $person->id) }}"
                   data-tooltip="Redaguoti"
                   class="tooltipped waves-effect waves-light green btn-small">
                    <i class="tiny material-icons">edit</i>
                </a>
                <form action="{{ route('persons.destroy', $person->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit"data-tooltip="Šalinti"
                            class="tooltipped waves-effect waves-light red btn-small">
                        <i class="tiny material-icons">delete</i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
