@extends('layout.auth.app',[
    'title' => 'Contact Us'
])
@section('content')
<div class="row justify-content-center">

    <div class="col-xl-12 col-lg-12 col-md-12">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                <div style="color: #2F5496">
                                    <h4>Contact Us</h4>
                                </div>
                            </div>
                            <div class="mt-5" style="color: #2F5496">
                                <h5><b>By email</b></h5>
                            </div>
                            <div style="color: black">
                                <p>
                                    For general questions and feedback, just send a message through to developer@markashosting.com.
                                    <br> 
                                    Screenshots, error messages and detailed descriptions are really useful to help us find a speedy resolution to your problem.
                                </p>
                                <br>
                                <p>
                                    You can also open up a support ticket directly from our 
                                    <span>
                                        <a title="Contact For Markas Hosting" alt="Professional Web & Apps Development" target="_blank"  href="https://markashosting.com/kontak-kami">support portal.</a>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
@stop