<?php if(\App\Helpers\Classes\Helper::showIntercomForVipMembership()): ?>
	<script>
		window.intercomSettings = {
			api_base: "https://api-iam.intercom.io",
			app_id: "udcwpqev",
		};
	</script>

	<script>
		// We pre-filled your app ID in the widget URL: 'https://widget.intercom.io/widget/i5yu8vmm'
		(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',w.intercomSettings);}else{var d=document;var i=function(){i.c(arguments);};i.q=[];i.c=function(args){i.q.push(args);};w.Intercom=i;var l=function(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/udcwpqev';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);};if(document.readyState==='complete'){l();}else if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();
	</script>
<?php endif; ?>

<?php /**PATH C:\Users\zagzo\Downloads\UniServerZ\www\resources\views/default/panel/layout/includes/vip-intercom.blade.php ENDPATH**/ ?>