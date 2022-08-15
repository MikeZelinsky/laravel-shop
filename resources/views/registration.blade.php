@extends('layouts.test')
    @if($errors->any())
        <div class="alert alert-danger">
         <ul>
                 @foreach($errors->all() as $error)
                 <li>{{$error}}</li>
                 @endforeach
         </ul>
        </div>
        @endif
    <form action="{{route('client-form')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container mt-2">
            <input type="text" name="name" placeholder="Введите имя" class="form-control"><br>
            <input type="email" name="email" placeholder="Введите email" class="form-control"><br>
            <input type="password" name="password" placeholder="Введите пароль" class="form-control"><br>
            <input type="number" name="city_id" placeholder="введите id города" class="form-control"><br>
            <input type="number" name="car_id" placeholder="введите id машины" class="form-control"><br>
        {{--<textarea name="message" value="<?=$_SESSION['message']?>" placeholder="Введите сообщение" class="form-control"></textarea><br>--}}
        <!--     <input type="submit" value="Отправить" class="btn btn-success">-->
            <input type="file" name="file" class="form-control"><br>
            <button type="submit" value="Отправить" class="btn btn-success">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
                    <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z"></path>
                </svg>Отправить</button>
        </div>
    </form>
