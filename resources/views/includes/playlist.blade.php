<!-- =============== START PLAYLIST ================ -->
<div class="playlist-wrapper" id="playlist-wrapper">
    <div class="jp-playlist container">
        <div class="about-list clearfix">
            <span class="about-name">NAME</span>
            <span class="about-length">LENGTH</span>
            <span class="about-available">AVAILABLE ON</span>
        </div>
        @foreach($tracks as $track)
			{{-- {{dd($track)}} --}}
			<div class="trak-item" data-audio="{{$track['previewUrl']}}" data-artist="{{$track['artistName']}}" data-thumbnail="{{$track['artworkUrl100']}}" data-id="{{$track['trackId']}}">
				<audio preload="metadata" src="{{$track['previewUrl']}}" title="{{$track['trackName']}}" data-state="pause"></audio>
				<div class="additional-button">
					<div class="center-y-table">
						<a href="contact.html#">
							<i class="fa fa-amazon"></i>
						</a>
						<a href="{{$track['trackViewUrl']}}">
							<i class="fa fa-apple"></i>
						</a>
						<a href="contact.html#">
							<i class="fa fa-spotify"></i>
						</a>
					</div>
				</div>
				<div class="play-pause-button">
					<div class="center-y-table">
						<i class="fa fa-play"></i>
					</div>
				</div>
				<div class="name-artist">
					<div class="center-y-table">
						<h2>
							{{$track['artistName']}} - {{$track['trackName']}}
						</h2>
					</div>
				</div>
				<time class="trak-duration">0:0</time>
			</div>
		@endforeach
    </div>
</div>
<!-- =============== END PLAYLIST ================ -->
