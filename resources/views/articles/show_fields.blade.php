<table class="" id="articles-table" style="width:100%">
    <tbody>  
        @include('flash::message')
        <tr>
            
            <td><img src="{!! asset('images/articles/'.$articles->image) !!}" width="150"></td>
            <td style="padding-left: 10px;">
                <h4><a href="{{ route('articles.show', [$articles->id]) }}">{{ $articles->title }}</a></h4>
                by {{ $articles->user->name }}<br/>
                {{ $articles->description }}
                <br/>
                Tags: 
                @for($i=0; $i<count($tags); $i++)                    
                    {{ \App\Models\Tag::where('id',$tags[$i]['tag_id'])->pluck('name','id')->first()."," }}                    
                @endfor                    
            </td>                                
            <td>
                <div class='btn-group'>
                    @php if(isset(Auth::user()->id) && Auth::user()->id == $articles->user_id ) { @endphp
                    <a href="{{ route('articles.edit', [$articles->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                    @php } @endphp
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="3"><h4>Comments</h4></td>            
        </tr>
        
        @for($i=0; $i<count($comments); $i++)        
        <tr>
            <td>
                {{ date('Y M d',strtotime($comments[$i]['created_at'])) }}
            </td>
            <td>
                {{ $comments[$i]['text'] }}<br/>
                <small><i>by {{ \App\User::where('id', $comments[$i]['user_id'])->pluck('name', 'id')->first() }}</i></small>
            </td>
        </tr>        
        @endfor
        
        @if(isset(Auth::user()->id))
        <tr>
            <td colspan="3">
                {!! Form::open(['route' => 'comments.store']) !!}

                    @include('comments.fields')

                 {!! Form::close() !!}
            </td>            
        </tr>       
        @else
        <tr>
            <td colspan="3">
                <a class="nav-link" href="{{ route('login') }}">Please login to comment</a>
            </td>            
        </tr>   
        @endif
    </tbody>
</table>


