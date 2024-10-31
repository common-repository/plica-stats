<?php
/*
 Plugin Name: Plica Stats
 Plugin URI: http://plicazaragozame.es
 Description: Stats for Plica Zaragozame
 Author: César Laso (Plica Zaragozame S.L.)
 Author URI: http://cesarlaso.com
 Text Domain: plica-stats
 Version: 1.0.19
 */
 
define('PLICA_STATS_VERSION', '1.0.19');
define('PLICA_STATS_BASE_URL', 'index.php?page=plica-stats/plica-stats.php');

define('PLICA_STATS_URL', 'http://plicastats.plicazaragozame.es');
define('PLICA_STATS_TRACKER_URL', PLICA_STATS_URL . '/tracker.js');
define('PLICA_STATS_URL_SWF', PLICA_STATS_URL . '/open-flash-chart.swf');

define('PLICA_STATS_API_URL', PLICA_STATS_URL . '/api');
define('PLICA_STATS_API_URL_REGISTER', PLICA_STATS_API_URL . '/register');
define('PLICA_STATS_API_URL_TOP_REFERERS_BY_DATE', PLICA_STATS_API_URL . '/%d/top-referers/%d');
define('PLICA_STATS_API_URL_TOP_REFERERS_BY_LAST_DAYS', PLICA_STATS_API_URL . '/%d/top-referers/last/%d');
define('PLICA_STATS_API_URL_TOP_REFERERS_BY_ALL', PLICA_STATS_API_URL . '/%d/top-referers/all');
define('PLICA_STATS_API_URL_TOP_SEARCHES_BY_DATE', PLICA_STATS_API_URL . '/%d/top-searches/%d');
define('PLICA_STATS_API_URL_TOP_SEARCHES_BY_LAST_DAYS', PLICA_STATS_API_URL . '/%d/top-searches/last/%d');
define('PLICA_STATS_API_URL_TOP_SEARCHES_BY_ALL', PLICA_STATS_API_URL . '/%d/top-searches/all');
define('PLICA_STATS_API_URL_TOP_VISITS_BY_DATE', PLICA_STATS_API_URL . '/%d/top-visits/%d');
define('PLICA_STATS_API_URL_TOP_VISITS_BY_LAST_DAYS', PLICA_STATS_API_URL . '/%d/top-visits/last/%d');
define('PLICA_STATS_API_URL_TOP_VISITS_BY_ALL', PLICA_STATS_API_URL . '/%d/top-visits/all');


define('PLICA_STATS_API_URL_TOP_COUNTRIES_BY_DATE', PLICA_STATS_API_URL . '/%d/top-countries/%d');
define('PLICA_STATS_API_URL_TOP_COUNTRIES_BY_LAST_DAYS', PLICA_STATS_API_URL . '/%d/top-countries/last/%d');
define('PLICA_STATS_API_URL_TOP_COUNTRIES_BY_ALL', PLICA_STATS_API_URL . '/%d/top-countries/all');



define('PLICA_STATS_API_URL_GRAPH_LAST30DAYS', PLICA_STATS_API_URL . '/%d/graph/last30days');
define('PLICA_STATS_API_URL_GRAPH_DIRECT_VS_REFERED', PLICA_STATS_API_URL . '/%d/graph/direct-vs-refered');

$plica_stats_country_codes = array(
'A1'	=> 'Anonymous Proxy','A2'	=> 'Satellite Provider','AD'	=> 'Andorra','AE'	=> 'United Arab Emirates','AF'	=> 'Afghanistan','AG'	=> 'Antigua and Barbuda','AI'	=> 'Anguilla','AL'	=> 'Albania','AM'	=> 'Armenia','AN'	=> 'Netherlands Antilles','AO'	=> 'Angola','AP'	=> 'Asia/Pacific Region','AQ'	=> 'Antarctica','AR'	=> 'Argentina','AS'	=> 'American Samoa','AT'	=> 'Austria','AU'	=> 'Australia','AW'	=> 'Aruba','AX'	=> 'Aland Islands','AZ'	=> 'Azerbaijan','BA'	=> 'Bosnia and Herzegovina','BB'	=> 'Barbados','BD'	=> 'Bangladesh','BE'	=> 'Belgium','BF'	=> 'Burkina Faso','BG'	=> 'Bulgaria','BH'	=> 'Bahrain','BI'	=> 'Burundi','BJ'	=> 'Benin','BM'	=> 'Bermuda','BN'	=> 'Brunei Darussalam','BO'	=> 'Bolivia','BR'	=> 'Brazil','BS'	=> 'Bahamas','BT'	=> 'Bhutan','BV'	=> 'Bouvet Island','BW'	=> 'Botswana','BY'	=> 'Belarus','BZ'	=> 'Belize','CA'	=> 'Canada','CC'	=> 'Cocos (Keeling) Islands','CD'	=> 'Congo  The Democratic Republic of the','CF'	=> 'Central African Republic','CG'	=> 'Congo','CH'	=> 'Switzerland','CI'	=> 'Cote d\'Ivoire','CK'	=> 'Cook Islands','CL'	=> 'Chile','CM'	=> 'Cameroon','CN'	=> 'China','CO'	=> 'Colombia','CR'	=> 'Costa Rica','CU'	=> 'Cuba','CV'	=> 'Cape Verde','CX'	=> 'Christmas Island','CY'	=> 'Cyprus','CZ'	=> 'Czech Republic','DE'	=> 'Germany','DJ'	=> 'Djibouti','DK'	=> 'Denmark','DM'	=> 'Dominica','DO'	=> 'Dominican Republic','DZ'	=> 'Algeria','EC'	=> 'Ecuador','EE'	=> 'Estonia','EG'	=> 'Egypt','EH'	=> 'Western Sahara','ER'	=> 'Eritrea','ES'	=> 'Spain','ET'	=> 'Ethiopia','EU'	=> 'Europe','FI'	=> 'Finland','FJ'	=> 'Fiji','FK'	=> 'Falkland Islands (Malvinas)','FM'	=> 'Micronesia  Federated States of','FO'	=> 'Faroe Islands','FR'	=> 'France','GA'	=> 'Gabon','GB'	=> 'United Kingdom','GD'	=> 'Grenada','GE'	=> 'Georgia','GF'	=> 'French Guiana','GG'	=> 'Guernsey','GH'	=> 'Ghana','GI'	=> 'Gibraltar','GL'	=> 'Greenland','GM'	=> 'Gambia','GN'	=> 'Guinea','GP'	=> 'Guadeloupe','GQ'	=> 'Equatorial Guinea','GR'	=> 'Greece','GS'	=> 'South Georgia and the South Sandwich Islands','GT'	=> 'Guatemala','GU'	=> 'Guam','GW'	=> 'Guinea-Bissau','GY'	=> 'Guyana','HK'	=> 'Hong Kong','HM'	=> 'Heard Island and McDonald Islands','HN'	=> 'Honduras','HR'	=> 'Croatia','HT'	=> 'Haiti','HU'	=> 'Hungary','ID'	=> 'Indonesia','IE'	=> 'Ireland','IL'	=> 'Israel','IM'	=> 'Isle of Man','IN'	=> 'India','IO'	=> 'British Indian Ocean Territory','IQ'	=> 'Iraq','IR'	=> 'Iran  Islamic Republic of','IS'	=> 'Iceland','IT'	=> 'Italy','JE'	=> 'Jersey','JM'	=> 'Jamaica','JO'	=> 'Jordan','JP'	=> 'Japan','KE'	=> 'Kenya','KG'	=> 'Kyrgyzstan','KH'	=> 'Cambodia','KI'	=> 'Kiribati','KM'	=> 'Comoros','KN'	=> 'Saint Kitts and Nevis','KP'	=> 'Korea  Democratic People\'s Republic of','KR'	=> 'Korea  Republic of','KW'	=> 'Kuwait','KY'	=> 'Cayman Islands','KZ'	=> 'Kazakhstan','LA'	=> 'Lao People\'s Democratic Republic','LB'	=> 'Lebanon','LC'	=> 'Saint Lucia','LI'	=> 'Liechtenstein','LK'	=> 'Sri Lanka','LR'	=> 'Liberia','LS'	=> 'Lesotho','LT'	=> 'Lithuania','LU'	=> 'Luxembourg','LV'	=> 'Latvia','LY'	=> 'Libyan Arab Jamahiriya','MA'	=> 'Morocco','MC'	=> 'Monaco','MD'	=> 'Moldova  Republic of','ME'	=> 'Montenegro','MG'	=> 'Madagascar','MH'	=> 'Marshall Islands','MK'	=> 'Macedonia','ML'	=> 'Mali','MM'	=> 'Myanmar','MN'	=> 'Mongolia','MO'	=> 'Macao','MP'	=> 'Northern Mariana Islands','MQ'	=> 'Martinique','MR'	=> 'Mauritania','MS'	=> 'Montserrat','MT'	=> 'Malta','MU'	=> 'Mauritius','MV'	=> 'Maldives','MW'	=> 'Malawi','MX'	=> 'Mexico','MY'	=> 'Malaysia','MZ'	=> 'Mozambique','NA'	=> 'Namibia','NC'	=> 'New Caledonia','NE'	=> 'Niger','NF'	=> 'Norfolk Island','NG'	=> 'Nigeria','NI'	=> 'Nicaragua','NL'	=> 'Netherlands','NO'	=> 'Norway','NP'	=> 'Nepal','NR'	=> 'Nauru','NU'	=> 'Niue','NZ'	=> 'New Zealand','OM'	=> 'Oman','PA'	=> 'Panama','PE'	=> 'Peru','PF'	=> 'French Polynesia','PG'	=> 'Papua New Guinea','PH'	=> 'Philippines','PK'	=> 'Pakistan','PL'	=> 'Poland','PM'	=> 'Saint Pierre and Miquelon','PN'	=> 'Pitcairn','PR'	=> 'Puerto Rico','PS'	=> 'Palestinian Territory','PT'	=> 'Portugal','PW'	=> 'Palau','PY'	=> 'Paraguay','QA'	=> 'Qatar','RE'	=> 'Reunion','RO'	=> 'Romania','RS'	=> 'Serbia','RU'	=> 'Russian Federation','RW'	=> 'Rwanda','SA'	=> 'Saudi Arabia','SB'	=> 'Solomon Islands','SC'	=> 'Seychelles','SD'	=> 'Sudan','SE'	=> 'Sweden','SG'	=> 'Singapore','SH'	=> 'Saint Helena','SI'	=> 'Slovenia','SJ'	=> 'Svalbard and Jan Mayen','SK'	=> 'Slovakia','SL'	=> 'Sierra Leone','SM'	=> 'San Marino','SN'	=> 'Senegal','SO'	=> 'Somalia','SR'	=> 'Suriname','ST'	=> 'Sao Tome and Principe','SV'	=> 'El Salvador','SY'	=> 'Syrian Arab Republic','SZ'	=> 'Swaziland','TC'	=> 'Turks and Caicos Islands','TD'	=> 'Chad','TF'	=> 'French Southern Territories','TG'	=> 'Togo','TH'	=> 'Thailand','TJ'	=> 'Tajikistan','TK'	=> 'Tokelau','TL'	=> 'Timor-Leste','TM'	=> 'Turkmenistan','TN'	=> 'Tunisia','TO'	=> 'Tonga','TR'	=> 'Turkey','TT'	=> 'Trinidad and Tobago','TV'	=> 'Tuvalu','TW'	=> 'Taiwan','TZ'	=> 'Tanzania  United Republic of','UA'	=> 'Ukraine','UG'	=> 'Uganda','UM'	=> 'United States Minor Outlying Islands','US'	=> 'United States','UY'	=> 'Uruguay','UZ'	=> 'Uzbekistan','VA'	=> 'Holy See (Vatican City State)','VC'	=> 'Saint Vincent and the Grenadines','VE'	=> 'Venezuela','VG'	=> 'Virgin Islands  British','VI'	=> 'Virgin Islands  U.S.','VN'	=> 'Vietnam','VU'	=> 'Vanuatu','WF'	=> 'Wallis and Futuna','WS'	=> 'Samoa','YE'	=> 'Yemen','YT'	=> 'Mayotte','ZA'	=> 'South Africa','ZM'	=> 'Zambia','ZW'	=> 'Zimbabwe','RD'	=> 'Reserved'
);


function plica_stats_id() {
	return get_option('plica_stats_id');
}

function plica_stats_api_register() {
	$url = PLICA_STATS_API_URL_REGISTER;
	$wh = new WP_Http();
	$body = http_build_query(array(
		'url' => get_bloginfo('url'),
	));
	$res = $wh->request($url, array('method'=>'POST', 'body'=>$body));
	$id = (int)json_decode($res['body']);
	add_option('plica_stats_id', $id) or
		update_option('plica_stats_id', $id);
}

function plica_stats_activate() {
	plica_stats_api_register();
}
function plica_stats_deactivate() {
	delete_option('plica_stats_id');
}

register_activation_hook( __FILE__, 'plica_stats_activate' );
register_deactivation_hook(__FILE__, 'plica_stats_deactivate');


function plica_stats_api_get_raw($url) {
	$wh = new WP_Http();
	$res = $wh->request($url);
	if (isset($res->errors)) {
		return null;
	}
	return $res['body'];
}

function plica_stats_api_get($url) {
	$wh = new WP_Http();
	$res = $wh->request($url);
	if (isset($res->errors)) {
		return null;
	}
	return json_decode($res['body']);
}

function plica_stats_api_top_referers_by_date($time) {
	$url = sprintf(PLICA_STATS_API_URL_TOP_REFERERS_BY_DATE, plica_stats_id(), $time);
	return plica_stats_api_get($url);
}
function plica_stats_api_top_referers_by_last_days($days) {
	$url = sprintf(PLICA_STATS_API_URL_TOP_REFERERS_BY_LAST_DAYS, plica_stats_id(), $days);
	return plica_stats_api_get($url);
}
function plica_stats_api_top_referers_by_all() {
	$url = sprintf(PLICA_STATS_API_URL_TOP_REFERERS_BY_ALL, plica_stats_id());
	return plica_stats_api_get($url);
}

function plica_stats_api_top_searches_by_date($time) {
	$url = sprintf(PLICA_STATS_API_URL_TOP_SEARCHES_BY_DATE, plica_stats_id(), $time);
	return plica_stats_api_get($url);
}
function plica_stats_api_top_searches_by_last_days($days) {
	$url = sprintf(PLICA_STATS_API_URL_TOP_SEARCHES_BY_LAST_DAYS, plica_stats_id(), $days);
	return plica_stats_api_get($url);
}
function plica_stats_api_top_searches_by_all() {
	$url = sprintf(PLICA_STATS_API_URL_TOP_SEARCHES_BY_ALL, plica_stats_id());
	return plica_stats_api_get($url);
}


function plica_stat_replace_countries_code($rows) {
	global $plica_stats_country_codes;
	for ($i=0; $i<count($rows); $i++) {
		if (array_key_exists($rows[$i]->title, $plica_stats_country_codes)) {
			$rows[$i]->title = __($plica_stats_country_codes[$rows[$i]->title]);
		}
	}
	return $rows;
}


function plica_stats_api_top_countries_by_date($time) {
	$url = sprintf(PLICA_STATS_API_URL_TOP_COUNTRIES_BY_DATE, plica_stats_id(), $time);
	$res = plica_stats_api_get($url);
	$res->rows = plica_stat_replace_countries_code($res->rows);
	return $res;
}
function plica_stats_api_top_countries_by_last_days($days) {
	$url = sprintf(PLICA_STATS_API_URL_TOP_COUNTRIES_BY_LAST_DAYS, plica_stats_id(), $days);
	$res = plica_stats_api_get($url);
	$res->rows = plica_stat_replace_countries_code($res->rows);
	return $res;
}
function plica_stats_api_top_countries_by_all() {
	$url = sprintf(PLICA_STATS_API_URL_TOP_COUNTRIES_BY_ALL, plica_stats_id());
	$res = plica_stats_api_get($url);
	$res->rows = plica_stat_replace_countries_code($res->rows);
	return $res;
}



function plica_stats_api_top_visits_by_date($time) {
	$url = sprintf(PLICA_STATS_API_URL_TOP_VISITS_BY_DATE, plica_stats_id(), $time);
	return plica_stats_api_get($url);
}
function plica_stats_api_top_visits_by_last_days($days) {
	$url = sprintf(PLICA_STATS_API_URL_TOP_VISITS_BY_LAST_DAYS, plica_stats_id(), $days);
	return plica_stats_api_get($url);
}
function plica_stats_api_top_visits_by_all() {
	$url = sprintf(PLICA_STATS_API_URL_TOP_VISITS_BY_ALL, plica_stats_id());
	return plica_stats_api_get($url);
}



function plica_stats_url_cut_http($url) {
	return substr($url, 7);
}
function plica_stats_url_cut($url, $max_length=50, $extra='...') {
	if (strlen($url) > $max_length) {
		$extra_l = strlen($extra);
		return substr($url, 0, $max_length-$extra_l) . $extra;
	}
	return $url;
}

function plica_str_starts_with($str1, $str2) {
	$l1 = strlen($str1);
	$l2 = strlen($str2);
	if ($l1 < $l2) return false;
	return (substr($str1, 0, $l2) == $str2);
}


function plica_stats_google_title_blog($guid) {
	
}

function plica_stats_good_title($title) {
	$home = get_bloginfo('url');
	
	if (($title == $home) || ($title == ($home . '/'))) {
		return __('Home');
	} else {
		if (plica_str_starts_with($title, $home)) {
			
			if (preg_match('/tag\/(.+)\//', $title, $matches)) {
				return __('Tag') . ': ' . $matches[1];
			}
			if (preg_match('/page\/(.+)\//', $title, $matches)) {
				return __('Page') . ': ' . $matches[1];
			}
			if (preg_match('/category\/(.+)\//', $title, $matches)) {
				return __('Category') . ': ' . $matches[1];
			}
			
			global $wpdb;
			$post_guid = $title;
			$post_title = $wpdb->get_var($wpdb->prepare("SELECT post_title FROM $wpdb->posts WHERE guid=%s", $post_guid));
			if ($post_title != '') {
				return $post_title;
			} else {
				return plica_stats_url_cut($title);
			}
		} else {
			return plica_stats_url_cut($title);
		}
	}
}

function plica_stats_table($table_title, $th_title, $th_title_value, $data, $max_rows) {
	?>
	<h4 class="table-title"><?php echo $table_title;?></h4>
	
	<p class="total">
		<?php if (isset($data->total)) { ?>
		<?php echo __('Total', 'plica-stats');?>:	<?php echo $data->total;?>
		<?php } ?>
	</p>
	<?php
	$rows = $data->rows;
	if (count($rows) == 0) {
		return;
	}
	?>
	<table>
	<tr>
		<th><?php echo $th_title;?></th>
		<th class="counter"><?php echo $th_title_value;?></th>
	</tr>
	<?php
	$max = min(count($rows), $max_rows);
	for ($i=0; $i<$max; $i++) {
		$r = $rows[$i];
		$tr_class = ($i%2==0) ? 'alternate' : '';
		?>
		<tr class="<?php echo $tr_class;?>">
			<td>
				<?php if (plica_str_starts_with($r->title, 'http')) { ?>
				<a href="<?php echo $r->title;?>">
					<?php echo plica_stats_good_title($r->title);?>
				</a>
				<?php } else { ?>
					<?php echo $r->title;?>
				<?php } ?>
			</td>
			<td class="counter"><?php echo $r->value;?></td>
		</tr>
		<?php
	}
	?>
	</table>
	<?php
}


function plica_stats_graph() {
	$swf_ofc  = sprintf(PLICA_STATS_API_URL_GRAPH_LAST30DAYS, plica_stats_id());
	?>
	<div class="plica-stats-graph">
		<p>
			<a href=""><?php _e('Days', 'plica-stats');?></a>
			<a href=""><?php _e('Weeks', 'plica-stats');?></a>
			<a href=""><?php _e('Months', 'plica-stats');?></a>
		</p>
		<div id="plica-stats-graph-wrapper">
			<iframe class="plica-stats-graph-iframe"
				frameborder="0"
				src="<?php echo PLICA_STATS_URL_SWF;?>?ofc=<?php echo $swf_ofc;?>"></iframe>
		</div>
	</div>
	<?php
}


function plica_stats_time_today() {
	$now = time();
	$today = mktime(0, 0, 0, date('n', $now), date('j', $now), date('Y', $now));
	return $today;
}

function plica_stats_referers() {
	$today = plica_stats_time_today();
	$yesterday = $today - (24*60*60);
?>
<div class="plica-stats-div">
	<h3>
		<?php _e('Referers', 'plica-stats');?>
		-
		<a class="see-full-report" href="<?php echo PLICA_STATS_BASE_URL;?>&plica-stats-page=referers-full-report">
			<?php _e('See full report', 'plica-stats');?>
		</a>
	</h3>
	<?php
		plica_stats_table(
			__('Today', 'plica-stats'),
			__('Web','plica-stats'),
			__('Views','plica-stats'),
			plica_stats_api_top_referers_by_date($today),
			7
		);
	?>
	<?php
		plica_stats_table(
			__('Yesterday', 'plica-stats'),
			__('Web','plica-stats'),
			__('Views','plica-stats'),
			plica_stats_api_top_referers_by_date($yesterday),
			4
		);
	?>
</div>
<?php
}

function plica_stats_direct_vs_refered() {
	$swf_ofc2 = sprintf(PLICA_STATS_API_URL_GRAPH_DIRECT_VS_REFERED, plica_stats_id());
	?>
	<div class="plica-stats-div">
		<h3>
			<?php _e('Direct traffic vs refered', 'plica-stats');?>
		</h3>
		<iframe class="plica-stats-graph-iframe"
			frameborder="0"
			src="<?php echo PLICA_STATS_URL_SWF;?>?ofc=<?php echo $swf_ofc2;?>"></iframe>
	</div>
	<?php
}

function plica_stats_countries() {
	$today = plica_stats_time_today();
	$yesterday = $today - (24*60*60);
?>
<div class="plica-stats-div">
	<h3>
		<?php _e('Countries', 'plica-stats');?>
		-
		<a class="see-full-report" href="<?php echo PLICA_STATS_BASE_URL;?>&plica-stats-page=countries-full-report">
			<?php _e('See full report', 'plica-stats');?>
		</a>
	</h3>
	<?php
		plica_stats_table(
			__('Today', 'plica-stats'),
			__('Country','plica-stats'),
			__('Views','plica-stats'),
			plica_stats_api_top_countries_by_date($today),
			7
		);
	?>
	<?php
		plica_stats_table(
			__('Yesterday', 'plica-stats'),
			__('Country','plica-stats'),
			__('Views','plica-stats'),
			plica_stats_api_top_countries_by_date($yesterday),
			4
		);
	?>
</div>
<?php
}

function plica_stats_page_countries_full_report() {
	$hoy = plica_stats_time_today();
	?>
	<h2><?php _e('Plica Stats - Top countries', 'plica-stats');?></h2>
	<p><?php _e('Updated every 12 hours', 'plica-stats');?></p>
	<p>
		<a href="#plica-stats-div-report-7-days"><?php _e('Last 7 days', 'plica-stats');?></a> -
		<a href="#plica-stats-div-report-30-days"><?php _e('Last 30 days', 'plica-stats');?></a> - 
		<a href="#plica-stats-div-report-365-days"><?php _e('Last 365 days', 'plica-stats');?></a> -
		<a href="#plica-stats-div-report-all"><?php _e('All time', 'plica-stats');?></a>
	</p>
	<div id="plica-stats-div-report-7-days" class="plica-stats-div-report">
	<h3><?php _e('Last 7 days', 'plica-stats');?></h3>
	<?php for ($i=0; $i<7; $i++) { ?>
		<div class="plica-stats-div">
		<?php
		$fecha = $hoy - ($i*(24*60*60));
		plica_stats_table(
			date('j F Y', $fecha),
			__('Country','plica-stats'),
			__('Views','plica-stats'),
			plica_stats_api_top_countries_by_date($fecha),
			10
		);
		?>
		</div>
		<?php if (($i - 1) % 2 == 0) { ?> <div style="clear:both"></div><?php } ?>
	<?php } ?>
	</div>
	<div style="clear:both"></div>
	
	<h3><?php _e('Summarize', 'plica-stats');?></h3>
	
	<div id="plica-stats-div-report-30-days" class="plica-stats-div-report">
	<?php
	plica_stats_table(
			__('Last 30 days', 'plica-stats'),
			__('Country','plica-stats'),
			__('Views','plica-stats'),
			plica_stats_api_top_countries_by_last_days(30),
			20
	);
	?>
	</div>
	<div style="clear:both"></div>
	
	<div id="plica-stats-div-report-365-days" class="plica-stats-div-report">
	<?php 
	plica_stats_table(
			__('Last 365 days', 'plica-stats'),
			__('Country','plica-stats'),
			__('Views','plica-stats'),
			plica_stats_api_top_countries_by_last_days(365),
			20
	);
	?>
	</div>
	<div style="clear:both"></div>
	
	<div id="plica-stats-div-report-all" class="plica-stats-div-report">
	<?php 
	plica_stats_table(
			__('All time', 'plica-stats'),
			__('Country','plica-stats'),
			__('Views','plica-stats'),
			plica_stats_api_top_countries_by_all(),
			20
	);
	?>
	</div>
	<?php
}


function plica_stats_searches() {
	$today = plica_stats_time_today();
	$yesterday = $today - (24*60*60);
?>
<div class="plica-stats-div">
	<h3>
		<?php _e('Search engine terms', 'plica-stats');?>
		-
		<a class="see-full-report" href="<?php echo PLICA_STATS_BASE_URL;?>&plica-stats-page=searches-full-report">
			<?php _e('See full report', 'plica-stats');?>
		</a>
	</h3>
	<?php
		plica_stats_table(
			__('Today', 'plica-stats'),
			__('Search','plica-stats'),
			__('Views','plica-stats'),
			plica_stats_api_top_searches_by_date($today),
			7
		);
	?>
	<?php
		plica_stats_table(
			__('Yesterday', 'plica-stats'),
			__('Search','plica-stats'),
			__('Views','plica-stats'),
			plica_stats_api_top_searches_by_date($yesterday),
			4
		);
	?>
</div>
<?php
}


function plica_stats_page_searches_full_report() {
	$hoy = plica_stats_time_today();
	?>
	<h2><?php _e('Plica Stats - Top search engine terms', 'plica-stats');?></h2>
	<p><?php _e('Updated every 12 hours', 'plica-stats');?></p>
	<p>
		<a href="#plica-stats-div-report-7-days"><?php _e('Last 7 days', 'plica-stats');?></a> -
		<a href="#plica-stats-div-report-30-days"><?php _e('Last 30 days', 'plica-stats');?></a> - 
		<a href="#plica-stats-div-report-365-days"><?php _e('Last 365 days', 'plica-stats');?></a> -
		<a href="#plica-stats-div-report-all"><?php _e('All time', 'plica-stats');?></a>
	</p>
	<div id="plica-stats-div-report-7-days" class="plica-stats-div-report">
	<h3><?php _e('Last 7 days', 'plica-stats');?></h3>
	<?php for ($i=0; $i<7; $i++) { ?>
		<div class="plica-stats-div">
		<?php
		$fecha = $hoy - ($i*(24*60*60));
		plica_stats_table(
			date('j F Y', $fecha),
			__('Search','plica-stats'),
			__('Views','plica-stats'),
			plica_stats_api_top_searches_by_date($fecha),
			10
		);
		?>
		</div>
		<?php if (($i - 1) % 2 == 0) { ?> <div style="clear:both"></div><?php } ?>
	<?php } ?>
	</div>
	<div style="clear:both"></div>
	
	<h3><?php _e('Summarize', 'plica-stats');?></h3>
	
	<div id="plica-stats-div-report-30-days" class="plica-stats-div-report">
	<?php
	plica_stats_table(
			__('Last 30 days', 'plica-stats'),
			__('Search','plica-stats'),
			__('Views','plica-stats'),
			plica_stats_api_top_searches_by_last_days(30),
			20
	);
	?>
	</div>
	<div style="clear:both"></div>
	
	<div id="plica-stats-div-report-365-days" class="plica-stats-div-report">
	<?php 
	plica_stats_table(
			__('Last 365 days', 'plica-stats'),
			__('Search','plica-stats'),
			__('Views','plica-stats'),
			plica_stats_api_top_searches_by_last_days(365),
			20
	);
	?>
	</div>
	<div style="clear:both"></div>
	
	<div id="plica-stats-div-report-all" class="plica-stats-div-report">
	<?php 
	plica_stats_table(
			__('All time', 'plica-stats'),
			__('Search','plica-stats'),
			__('Views','plica-stats'),
			plica_stats_api_top_searches_by_all(),
			20
	);
	?>
	</div>
	<?php
}
function plica_stats_page_referers_full_report() {
	$hoy = plica_stats_time_today();
	?>
	<h2><?php _e('Plica Stats - Top referers', 'plica-stats');?></h2>
	<p><?php _e('Updated every 12 hours', 'plica-stats');?></p>
	<p>
		<a href="#plica-stats-div-report-7-days"><?php _e('Last 7 days', 'plica-stats');?></a> -
		<a href="#plica-stats-div-report-30-days"><?php _e('Last 30 days', 'plica-stats');?></a> - 
		<a href="#plica-stats-div-report-365-days"><?php _e('Last 365 days', 'plica-stats');?></a> -
		<a href="#plica-stats-div-report-all"><?php _e('All time', 'plica-stats');?></a>
	</p>
	<div id="plica-stats-div-report-7-days" class="plica-stats-div-report">
	<h3><?php _e('Last 7 days', 'plica-stats');?></h3>
	<?php for ($i=0; $i<7; $i++) { ?>
		<div class="plica-stats-div">
		<?php
		$fecha = $hoy - ($i*(24*60*60));
		plica_stats_table(
			date('j F Y', $fecha),
			__('Referer','plica-stats'),
			__('Views','plica-stats'),
			plica_stats_api_top_referers_by_date($fecha),
			10
		);
		?>
		</div>
		<?php if (($i - 1) % 2 == 0) { ?> <div style="clear:both"></div><?php } ?>
	<?php } ?>
	</div>
	<div style="clear:both"></div>
	
	<h3><?php _e('Summarize', 'plica-stats');?></h3>
	
	<div id="plica-stats-div-report-30-days" class="plica-stats-div-report">
	<?php
	plica_stats_table(
			__('Last 30 days', 'plica-stats'),
			__('Referer','plica-stats'),
			__('Views','plica-stats'),
			plica_stats_api_top_referers_by_last_days(30),
			20
	);
	?>
	</div>
	<div style="clear:both"></div>
	
	<div id="plica-stats-div-report-365-days" class="plica-stats-div-report">
	<?php 
	plica_stats_table(
			__('Last 365 days', 'plica-stats'),
			__('Referer','plica-stats'),
			__('Views','plica-stats'),
			plica_stats_api_top_referers_by_last_days(365),
			20
	);
	?>
	</div>
	<div style="clear:both"></div>
	
	<div id="plica-stats-div-report-all" class="plica-stats-div-report">
	<?php 
	plica_stats_table(
			__('All time', 'plica-stats'),
			__('Referer','plica-stats'),
			__('Views','plica-stats'),
			plica_stats_api_top_referers_by_all(),
			20
	);
	?>
	</div>
	<?php
}

function plica_stats_page_visits_full_report() {
	$hoy = plica_stats_time_today();
	?>
	<h2><?php _e('Plica Stats - Top visits', 'plica-stats');?></h2>
	<p><?php _e('Updated every 12 hours', 'plica-stats');?></p>
	<p>
		<a href="#plica-stats-div-report-7-days"><?php _e('Last 7 days', 'plica-stats');?></a> -
		<a href="#plica-stats-div-report-30-days"><?php _e('Last 30 days', 'plica-stats');?></a> - 
		<a href="#plica-stats-div-report-365-days"><?php _e('Last 365 days', 'plica-stats');?></a> -
		<a href="#plica-stats-div-report-all"><?php _e('All time', 'plica-stats');?></a>
	</p>

	<div id="plica-stats-div-report-7-days" class="plica-stats-div-report">
	<h3><?php _e('Last 7 days', 'plica-stats');?></h3>
	<?php for ($i=0; $i<7; $i++) { ?>
		<div class="plica-stats-div">
		<?php
		$fecha = $hoy - ($i*(24*60*60));
		plica_stats_table(
			date('j F Y', $fecha),
			__('Page','plica-stats'),
			__('Views','plica-stats'),
			plica_stats_api_top_visits_by_date($fecha),
			10
		);
		?>
		</div>
		<?php if (($i - 1) % 2 == 0) { ?> <div style="clear:both"></div><?php } ?>
	<?php } ?>
	</div>
	<div style="clear:both"></div>
	
	<h3><?php _e('Summarize', 'plica-stats');?></h3>
	
	<div id="plica-stats-div-report-30-days" class="plica-stats-div-report">
	<?php
	plica_stats_table(
			__('Last 30 days', 'plica-stats'),
			__('Page','plica-stats'),
			__('Views','plica-stats'),
			plica_stats_api_top_visits_by_last_days(30),
			20
	);
	?>
	</div>
	<div style="clear:both"></div>
	
	<div id="plica-stats-div-report-365-days" class="plica-stats-div-report">
	<?php 
	plica_stats_table(
			__('Last 365 days', 'plica-stats'),
			__('Page','plica-stats'),
			__('Views','plica-stats'),
			plica_stats_api_top_visits_by_last_days(365),
			20
	);
	?>
	</div>
	<div style="clear:both"></div>
	
	<div id="plica-stats-div-report-all" class="plica-stats-div-report">
	<?php 
	plica_stats_table(
			__('All time', 'plica-stats'),
			__('Page','plica-stats'),
			__('Views','plica-stats'),
			plica_stats_api_top_visits_by_all(),
			20
	);
	?>
	</div>
	<?php
}


function plica_stats_visits() {
	$today = plica_stats_time_today();
	$yesterday = $today - (24*60*60);
?>
<div class="plica-stats-div">
	<h3>
		<?php _e('Top visits', 'plica-stats');?>
		-
		<a class="see-full-report" href="<?php echo PLICA_STATS_BASE_URL;?>&plica-stats-page=visits-full-report">
			<?php _e('See full report', 'plica-stats');?>
		</a>
	</h3>
	<?php
		plica_stats_table(
			__('Today', 'plica-stats'),
			__('Page','plica-stats'),
			__('Views','plica-stats'),
			plica_stats_api_top_visits_by_date($today),
			7
		);
	?>
	<?php
		plica_stats_table(
			__('Yesterday', 'plica-stats'),
			__('Page','plica-stats'),
			__('Views','plica-stats'),
			plica_stats_api_top_visits_by_date($yesterday),
			4
		);
	?>
</div>
<?php
}

function plica_stats_styles() {
?>
	<style type="text/css">
		.plica-wrap h3 {
			border-bottom: 1px solid #ccc;
		}
		
		.plica-stats-div {
			width: 44%;
			float: left;
			margin-right: 4%;
		}
		.plica-wrap table {
			clear: left;
			width: 100%;
		}
		.plica-wrap tr {
			height: 22px;
		}
		.plica-wrap tr.alternate {
			background-color: #E6F0FF;
		}
		.plica-wrap th {
			border-bottom:2px solid #ccc;
			text-align:left;
		}
		.plica-wrap th.counter, .plica-wrap td.counter {
			text-align: center;
			width:6em;
		}
		.plica-wrap td {
		}
		.plica-stats-graph-iframe {
			width: 100%;
			height: 265px;
			margin: 0 auto;
		}
		#plica-stats-graph-wrapper {
			width: 650px;
			height: 265px;
			margin: 0 auto;
			background: #fff;
		}
		
		.plica-wrap h4.table-title {
			float: left;
		}
		.plica-wrap p.total {
			float: right;
		}
		.plica-wrap a.see-full-report {
			text-decoration: none;
			font-size: 0.8em;
		}
		
		
	</style>
<?php
}

function plica_stats_default_page() {
?>
	<h2><?php _e('Plica Stats', 'plica-stats');?></h2>
	<p><?php _e('Updated every hour', 'plica-stats');?></p>
	<?php plica_stats_graph(); ?>
	<div style="clear:both"></div>
	<?php
		plica_stats_visits();
		plica_stats_searches();
	?>
	<div style="clear:both"></div>
	<?php
		plica_stats_referers();
		plica_stats_direct_vs_refered(); 
	?>
	<div style="clear:both"></div>
	<?php
		plica_stats_countries();
	?>
	
	<?php
}

function plica_stats_home() { 
	plica_stats_styles();
	?>
	<div class="wrap plica-wrap plica-stats-wrap">
	<?php
	$plica_pages = array(
		'' => 'plica_stats_default_page',
		'visits-full-report' => 'plica_stats_page_visits_full_report',
		'searches-full-report' => 'plica_stats_page_searches_full_report',
		'referers-full-report' => 'plica_stats_page_referers_full_report',
		'countries-full-report' => 'plica_stats_page_countries_full_report',
	);
	$plica_page = isset($_GET['plica-stats-page']) ? $_GET['plica-stats-page'] : '';
	if (array_key_exists($plica_page, $plica_pages)) {
		call_user_func($plica_pages[$plica_page]);
	}
	?>
	</div>
<?php 
}


function plica_stats_dashboard_widget() {
	$swf_ofc  = sprintf(PLICA_STATS_API_URL_GRAPH_LAST30DAYS, plica_stats_id());
	?>
	<iframe 
		style="width: 100%; margin: 0 auto; height: 265px;"
		frameborder="0"
		src="<?php echo PLICA_STATS_URL_SWF;?>?ofc=<?php echo $swf_ofc;?>"></iframe>
	<?php 
}

function plica_stats_wp_dashboard_setup() {
	wp_add_dashboard_widget('plica_stats_dashboard_widget', __('Plica Stats', 'plica-stats'), 'plica_stats_dashboard_widget');	
} 
add_action('wp_dashboard_setup', 'plica_stats_wp_dashboard_setup' );


















function plica_stats_wp_footer() {
	$id = plica_stats_id();
?>
<script type="text/javascript">
	var plica_stats_id = "<?php echo $id;?>";
</script>
<script type="text/javascript" src="<?php echo PLICA_STATS_TRACKER_URL;?>"></script>
<?php
}

function plica_stats_admin_menu() {
	$capability = 'read';
	add_dashboard_page(__('Plica Stats', 'plica-stats'), __('Plica Stats', 'plica-stats'), $capability, __FILE__, 'plica_stats_home');
}

function plica_stats_init_language() {
	$plugin_dir = basename(dirname(__FILE__));
	$lang_dir = '/languages';
	load_plugin_textdomain( 'plica-stats', WP_PLUGIN_DIR . $plugin_dir . $lang_dir, $plugin_dir . $lang_dir);
}
add_action('init', 'plica_stats_init_language');

function plica_stats_init() {
	if (is_admin()) {
		add_action('admin_menu', 'plica_stats_admin_menu');
	} else {
		add_action('wp_footer', 'plica_stats_wp_footer');
	}
}
add_action('init', 'plica_stats_init');

?>