{!! Form::open(array('method'=>'POST', 'id'=>'post')) !!}
{{ csrf_field() }}
{!! Form::textarea('comment','',array('id'=>'comment','class'=>'form-control','placeholder' => 'Write Something..', 'rows' => '2', 'onClick' => 'expand()')) !!}  

<div style="display:none"> 
{!! Form::textarea('movie_name','',  array('id'=>'movie_name')) !!}  
{!! Form::textarea('movie_id','',  array('id'=>'movie_id')) !!}  
{!! Form::textarea('movie_pic','',  array('id'=>'movie_pic')) !!}  
{!! Form::textarea('movie_g1','',  array('id'=>'movie_g1')) !!}  
{!! Form::textarea('movie_g2','',  array('id'=>'movie_g2')) !!}  
{!! Form::textarea('movie_g3','',  array('id'=>'movie_g3')) !!}  
{!! Form::textarea('movie_bio','',  array('id'=>'movie_bio')) !!}  
{!! Form::textarea('movie_length','',  array('id'=>'movie_length')) !!}  
{!! Form::textarea('movie_date','',  array('id'=>'movie_date')) !!}  
{!! Form::textarea('movie_rate','',  array('id'=>'movie_rate')) !!}  


</div>





<div id="buttons"> 
{!! Form::button('post', array('id' => 'save', 'class'=>'textarea_button btn btn-success', 'onClick' => 'toast()')) !!}

{!! Form::button('cancle', array('class'=>'textarea_button btn btn-link', 'onClick' => 'collapse()' )) !!}
</div>



{!! Form::close() !!}