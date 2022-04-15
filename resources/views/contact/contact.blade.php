@extends ('layout')

@section ('content')

<main>
    <h2>{{$MyData['title']}}</h2>
    <p>{{$MyData['short_text']}}</p>
    <div class="container contact-page">
        <div class="row">
            <h2>Contact Us</h2>
            <form action=""
                  onsubmit="return false">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" id="name">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="email" id="email">
                </div>
                <div class="form-group">
                    <label for="">Subject</label>
                    <input type="text" name="subject" id="subject" >
                </div>
                <div class="form-group">
                    <label for="">Message</label>
                    <textarea name="message" id="message"></textarea>
                </div>
                <div class="form-group">
                    <button onclick="alert('not working rn')">Send</button>
                </div>
            </form>
        </div>
    </div>
</main>

@endsection

@section('footer')
    <p>Contact page footer</p>
@endsection