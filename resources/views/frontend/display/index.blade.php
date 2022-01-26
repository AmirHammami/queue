@extends('frontend.template.page')
<!-- page title -->
@section('title', 'Display Token | ' . Config::get('adminlte.title'))

@section('content')
    <!-- Masthead -->

    <header class="display  text-center">
    
        <div class="overlay"></div>
        
            <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-between bg-white">
                        <div><img src="{{ asset('logo/22.jpg')}}" height="250"/></div>
                        <div><img src="{{ asset('logo/0.jpg')}}" /></div>
                        <div><img src="{{ asset('logo/11.jpg')}}" height="250"/></div>
                    </div>
                </div>
            </div>
            <div class="row div-vh">
               
                    <div class="col-12">
                    <div class="d-flex f1">
                    @php($i=0)
                @foreach($data as $singleData)
                   
                        
                            <div class="flex-fill font-mar textSelect{{ $i }}">
                                <!--<span class="blue-color" id="dept-list">{{ $singleData->department->name }}</span><br>-->
                                <span class="counter-color" id="counter-list">{{ $singleData->counter->name }}</span><br>
                                <span class="red-color" id="number-list">{{ $singleData->department->letter }}{{ str_pad($singleData->number, 4, '0', STR_PAD_LEFT) }}</span>

                            </div>
                        
                  
                     @php($i++)
                @endforeach
                </div>
                    </div>
         
 <!--
                <div class="col-8 padtb-16rem">
          
                    <span class="font-main-dept blue-color" id="dept">-</span><br>
                    <span class="font-main-dept" id="counter">-</span><br>
                    <span class="font-main-number red-color" id="number">-</span>
                    @if($setting_data->marquee != null && $setting_data->marquee != '')
                    
                    <div class="marquee-text">
                       <p>{{ $setting_data->marquee }}</p><br/>
                        <img src="{{ asset('logo/1.jpg')}}" height="150"/>
                    </div>
                    @endif
                    
                </div>-->
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-center bg-white">
  <div><img src="{{ asset('logo/44.jpg')}}" /></div>

                        <div><img src="{{ asset('logo/33.png')}}" height="150"/></div>
                        
                   
                       </div>
                  
                </div>
            </div>
        </div>
    </header>
@stop

@section('css')
@stop

@section('js')
    <script>var id_department = '{{ $id_department }}'</script>
    <script src="{{ asset('js/frontend/display/index.js'). '?v=' . rand(99999,999999) }}"></script>
@stop
