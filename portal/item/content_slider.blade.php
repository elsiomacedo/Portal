<div class="well-slider darksage">
    <div id="content" class="flexslider">
        <ul class="slides darksage">
            @foreach($notas as $linhas)
                 <li>
                    <div class="content-slider padding">
                        <h2>{{ $linhas["titulo"] }}</h2>
                        <p class="tx_slider">{{ $linhas["texto"] }}</p>
                    </div>
                    <div class="image-slider">
                        <img src="assets/img/{{ $linhas['icone'] }}" alt="" />
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>