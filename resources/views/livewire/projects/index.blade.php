<div>
    @foreach($this->projects as $project)
        <li>
            <a href={{route('projects.show', $project->id)}}>
               {{$project->id}}. {{$project->name}}
            </a>
        </li>

    @endforeach
</div>
