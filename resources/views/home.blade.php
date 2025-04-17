@include('layouts.header')

@section('content')
<div class="container mx-auto px-4">
    <div class="flex justify-center">
        <div class="w-full md:w-2/3">
            <div class="bg-white shadow rounded-lg">
                <div class="bg-gray-100 p-4 rounded-t-lg">
                    {{ __('Dashboard') }}
                </div>
                <div class="p-4">
                    @if (session('status'))
                        <div class="bg-green-100 text-green-700 p-4 rounded mb-4" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
