<?php

@if(session()->has('notification.message'))
<div class="dev-pop alert-{{ session('notification.type') }}" id="pop">
	<span class="blocked align-right" id="fp">
		<i class="fa fa-close dot-close cur-to-point" id="js-dot-close"></i>
	</span>
	<p class="blocked dev-padding-zx">
	    {{ session('notification.message') }}
	</p>
</div>
@endif