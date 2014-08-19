<?php
class myUtility
{
	public static function FileExtensionFromMime($contentType)
	{
	$map = array(
	'application/pdf' => '.pdf',
	'application/zip' => '.zip',
	'image/gif'       => '.gif',
	'images/jpeg'     => '.jpg',
	'images/png'      => '.png',
	'text/css'        => '.css',
	'text/html'       => '.html',
	 );
	 if (isset($map[$contentType]))
	 {
	 return $map[$contentType];
	 }
	 return '.unknown';
	}
}