<!-- =============== START ALBUM SINGLE ================ -->
<section class="albumSingle padding background-properties">
	<div class="sectionTitle paddingBottom">
		<span class="heading-t3"></span>
		<h2><a href="albums.html">Music</a></h2>
		<span class="heading-b3"></span>
	</div><!-- end sectionTtile -->
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
						<a href="{{ \App\Libraries\Tunes::spotifySearchTerm($track['artistName'] . ' ' . $track['trackName'])['tracks']['items'][0]['external_urls']['spotify'] }}">
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

	<div class="container" style="height: 270px; overflow: hidden;margin-top:80px">
		<iframe width="100%" height="465" scrolling="no" frameborder="no" src="https://www.reverbnation.com/widget_code/html_widget/artist_1076745?widget_id=55&pwc[included_songs]=1&context_type=page_object&pwc[size]=small" style="width:0px;min-width:100%;max-width:100%;"></iframe>
	</div>
</section>
<!-- =============== END ALBUM SINGLE ================ -->
