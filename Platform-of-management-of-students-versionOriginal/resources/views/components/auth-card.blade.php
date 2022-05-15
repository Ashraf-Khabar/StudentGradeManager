<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 "
     style="background-image: url('../../assets/img/b3.jpg') ; background-size: auto">
    <div>
        <a href="{{route('welcome')}}">
            <img src="../../assets/img/monLogo.png" width="50px">
        </a>
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden smx:rounded-lg" >
            {{ $slot }}
    </div>
</div>
