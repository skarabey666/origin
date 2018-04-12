if (!window.BX_GMapAddPlacemark)
{
	window.BX_GMapAddPlacemark = function(arPlacemark, map_id, path)
	{
		var map = GLOBAL_arMapObjects[map_id];
		
		if (null == map)
			return false;

		if(!arPlacemark.LAT || !arPlacemark.LON)
			return false;

		var root = path+'/images/marker.png';
				
		var image = new google.maps.MarkerImage( root,
												 new google.maps.Size(152, 66),
												 new google.maps.Point(0,0),
												 new google.maps.Point(52,66)
												); 
		console.log(path);
		var obPlacemark = new google.maps.Marker({
			'position': new google.maps.LatLng(arPlacemark.LAT, arPlacemark.LON),
			'map': map,
			'icon': image
		});
		
		if (BX.type.isNotEmptyString(arPlacemark.TEXT))
		{
			obPlacemark.infowin = new google.maps.InfoWindow({
				content: arPlacemark.TEXT.replace(/\n/g, '<br />')
			});
			
			google.maps.event.addListener(obPlacemark, 'click', function() {
				if (null != window['__bx_google_infowin_opened_' + map_id])
					window['__bx_google_infowin_opened_' + map_id].close();

				this.infowin.open(this.map, this);
				window['__bx_google_infowin_opened_' + map_id] = this.infowin;
			});
		}
		
		return obPlacemark;
	}
}

if (null == window.BXWaitForMap_view)
{
	function BXWaitForMap_view(map_id)
	{
		if (null == window.GLOBAL_arMapObjects)
			return;
	
		if (window.GLOBAL_arMapObjects[map_id])
			window['BX_SetPlacemarks_' + map_id]();
		else
			setTimeout('BXWaitForMap_view(\'' + map_id + '\')', 300);
	}
}