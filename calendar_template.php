<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2013 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * Templates for event calendar displays
 *
 * $Source: /cvs_backup/e107_0.8/e107_plugins/calendar_menu/calendar_template.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

/**
 *	e107 Event calendar plugin
 *
 * Templates for event calendar displays
 *
 *	@package	e107_plugins
 *	@subpackage	event_calendar
 *	@version 	$Id$;
 *
 */


if (!defined('e107_INIT')) { exit; }
if (!defined('USER_WIDTH')){ define('USER_WIDTH','width:auto'); }

//global $sc_style;

  $ec_images_path = e_IMAGE;
  $ec_images_path_abs = e_IMAGE_ABS;
  if (!defined('EC_RECENT_ICON')) 
  {
	define('EC_RECENT_ICON',e_IMAGE.'generic/new.png');
	define('EC_RECENT_ICON_ABS',e_IMAGE_ABS.'generic/new.png');
  }		// Filename of icon used to flag recent events




// TIME SWITCH BUTTONS ------------------------------------------------------------
$sc_style['EC_PREV_MONTH']['pre'] = "";
$sc_style['EC_PREV_MONTH']['post'] = "";

$sc_style['EC_CURRENT_MONTH']['pre'] = "<b>";
$sc_style['EC_CURRENT_MONTH']['post'] = "</b>";

$sc_style['EC_NEXT_MONTH']['pre'] = "";
$sc_style['EC_NEXT_MONTH']['post'] = "";

$sc_style['EC_PREV_YEAR']['pre'] = "";
$sc_style['EC_PREV_YEAR']['post'] = "";

$sc_style['EC_MONTH_LIST']['pre'] = "";
$sc_style['EC_MONTH_LIST']['post'] = "";

$sc_style['EC_NEXT_YEAR']['pre'] = "";
$sc_style['EC_NEXT_YEAR']['post'] = "";


$CALENDAR_TIME_TABLE = "
<div class='container-fluid'>
  <div class='row' style='margin-bottom: 10px; border-bottom:1px solid #e1e1e1;'>
    <div class='text-center col-sm-2' style='padding-bottom:10px;'>{EC_PREV_MONTH}</div>
	  <div class='text-center col-sm-8' style='padding-bottom:10px;'>{EC_CURRENT_MONTH}</div>
	  <div class='text-center col-sm-2' style='padding-bottom:10px;'>{EC_NEXT_MONTH}</div>
  </div>
  <div class='row' style='margin-bottom: 10px; border-bottom:1px solid #e1e1e1;'>
    <div class='text-center col-sm-2' style='padding-bottom:10px;'>{EC_PREV_YEAR}</div>
	  <div class='text-center col-sm-8' style='padding-bottom:10px;'>{EC_MONTH_LIST}</div>
	  <div class='text-center col-sm-2' style='padding-bottom:10px;'>{EC_NEXT_YEAR}</div>
  </div>
</div>";


// NAVIGATION BUTTONS
//$sc_style['NAV_LINKCURRENTMONTH']['pre'] = "<span class='btn button' style='width:120px; '>";
//$sc_style['NAV_LINKCURRENTMONTH']['post'] = "</span>";
$sc_style['EC_NAV_LINKCURRENTMONTH']['pre'] = "";
$sc_style['EC_NAV_LINKCURRENTMONTH']['post'] = "";

$CALENDAR_NAVIGATION_TABLE = "  
<div class='container-fluid' style='margin-bottom:20px;'>
  <form method='post' action='" . e_SELF . "?" . e_QUERY . "' id='calform'> 
    <div class='row'>
      <div class='col-xs-12 text-center'>{EC_NAV_CATEGORIES} {EC_NAV_BUT_ALLEVENTS} {EC_NAV_BUT_VIEWCAT} {EC_NAV_BUT_ENTEREVENT} {EC_NAV_BUT_SUBSCRIPTION} {EC_NAV_BUT_PRINTLISTS} {EC_NAV_LINKCURRENTMONTH}</div>
    </div>
  </form>
</div>";


// EVENT LIST ------------------------------------------------------------ 
$sc_style['EC_EVENTLIST_CAPTION']['pre'] = "<div class='text-left col-xs-12'><h4>";
$sc_style['EC_EVENTLIST_CAPTION']['post'] = ":</h4></div>\n";

$EVENT_EVENTLIST_TABLE_START = "
<div class='container-fluid'>
  <div class='row'>
    {EC_EVENTLIST_CAPTION}";
    
$EVENT_EVENTLIST_TABLE_END = "
  </div>
</div>";


// EVENT ARCHIVE ------------------------------------------------------------
$sc_style['EC_EVENTARCHIVE_CAPTION']['pre'] = "<div class='text-left col-xs-12' style='border-bottom: 1px solid #e1e1e1;'><h4>";          
$sc_style['EC_EVENTARCHIVE_CAPTION']['post'] = "</h4></div>\n";

$EVENT_ARCHIVE_TABLE_START = "
<br />
<div class='container-fluid'>
  <div class='row'>
    {EC_EVENTARCHIVE_CAPTION}";
                        
$EVENT_ARCHIVE_TABLE = "
	  <div class='text-left col-xs-3' style='padding: 10px 0;'>{EC_EVENT_RECENT_ICON}{EC_EVENTARCHIVE_DATE}</div>
	  <div class='text-left col-xs-9' style='padding: 10px 0;'>{EC_EVENTARCHIVE_HEADING}</div>";
    //<br />{EVENTARCHIVE_DETAILS}
    
$EVENT_ARCHIVE_TABLE_EMPTY = "
    <div class='text-left col-xs-12' style='padding: 10px 0;'>{EC_EVENTARCHIVE_EMPTY}</div>";
    
$EVENT_ARCHIVE_TABLE_END = "
  </div>
</div>";


// EVENT SHOW EVENT ------------------------------------------------------------
$EVENT_EVENT_TABLE_START = "<div class='container-fluid'>";
$EVENT_EVENT_TABLE_END = "</div>";


$sc_style['EC_EVENT_HEADING_DATE']['pre'] = "";
$sc_style['EC_EVENT_HEADING_DATE']['post'] = "";

$sc_style['EC_EVENT_DETAILS']['pre'] = "<div class='text-left col-xs-12' style='margin: 0 0 5px 0; padding: 10px 0; border-bottom: 1px solid #e1e1e1;'>";
$sc_style['EC_EVENT_DETAILS']['post'] = "</div>\n";

$sc_style['EC_EVENT_LOCATION']['pre'] = "<div class='text-left col-xs-12' style='margin: 0 0 5px 0; padding: 10px 0; border-bottom: 1px solid #e1e1e1;'><b>".EC_LAN_32."</b> ";
$sc_style['EC_EVENT_LOCATION']['post'] = "</div>";

$sc_style['EC_EVENT_AUTHOR']['pre'] = "<b>".EC_LAN_31."</b> ";
$sc_style['EC_EVENT_AUTHOR']['post'] = "&nbsp;";

$sc_style['EC_EVENT_CONTACT']['pre'] = "<b>".EC_LAN_33."</b> ";
$sc_style['EC_EVENT_CONTACT']['post'] = "&nbsp;";

$sc_style['EC_EVENT_THREAD']['pre'] = "<div class='text-left col-xs-12' style='margin: 0 0 5px 0; padding: 10px 0; border-bottom: 1px solid #e1e1e1;'><span class='smalltext'>";
$sc_style['EC_EVENT_THREAD']['post'] = "</span></div>\n";

$sc_style['EC_EVENT_CATEGORY']['pre'] = "<b>".EC_LAN_30."</b> ";
$sc_style['EC_EVENT_CATEGORY']['post'] = "&nbsp;";

$sc_style['EC_EVENT_DATE_START']['pre'] = '';
$sc_style['EC_EVENT_DATE_START']['post'] = '';

$sc_style['EC_EVENT_TIME_START']['pre'] = '';
$sc_style['EC_EVENT_TIME_START']['post'] = '';

$sc_style['EC_EVENT_DATE_END']['pre'] = '';
$sc_style['EC_EVENT_DATE_END']['post'] = '';

$sc_style['EC_EVENT_TIME_END']['pre'] = '';
$sc_style['EC_EVENT_TIME_END']['post'] = '';

$sc_style['EC_EVENT_EVENT_DATE_TIME']['pre'] =  "<b>".EC_LAN_29."</b> ";
$sc_style['EC_EVENT_EVENT_DATE_TIME']['post'] = '';

$sc_style['EC_IFNOT_ALLDAY']['pre'] = EC_LAN_144;
$sc_style['EC_IFNOT_ALLDAY']['post'] = "";

// The $EVENT_EVENT_DATETIME strings are used with the EC_EVENT_EVENT_DATE_TIME shortcode.
// There are four cases, each with a corresponding index into $EVENT_EVENT_DATETIME:
// 	0 - Normal event, starting and finishing on different dates (the 'original' default)
//	1 - Normal event, starting and finishing on the same day
//	2 - All-day event, starting and finishing on different days
//	3 - All-day event, starting and finishing on the same day

$EVENT_EVENT_DATETIME[0]  = "{EC_EVENT_DATE_START}".EC_LAN_144."{EC_EVENT_TIME_START}<b>  ".EC_LAN_69."</b> {EC_EVENT_DATE_END}{EC_IFNOT_ALLDAY=EC_EVENT_TIME_END}";
$EVENT_EVENT_DATETIME[1]  = "{EC_EVENT_DATE_START} ".EC_LAN_84." {EC_EVENT_TIME_START}".EC_LAN_85."{EC_EVENT_TIME_END}";
$EVENT_EVENT_DATETIME[2]  = "{EC_EVENT_DATE_START} <b>".EC_LAN_69."</b> {EC_EVENT_DATE_END}";
$EVENT_EVENT_DATETIME[3]  = "{EC_EVENT_DATE_START}";

$EVENT_EVENT_TABLE = "
<div class='row'>
	<div title='".EC_LAN_132."' class='btn btn-default btn-sm col-xs-12' style='cursor:pointer;' onclick=\"expandit('{EC_EVENT_ID}')\">
    <h5>{EC_EVENT_RECENT_ICON}{EC_EVENT_CAT_ICON}{EC_EVENT_HEADING_DATE}{EC_IFNOT_ALLDAY=EC_EVENT_TIME_START}&nbsp;-&nbsp;{EC_EVENT_TITLE}</h5>
  </div>
	<div id='{EC_EVENT_ID}' class='text-left col-xs-12' style='display:{EC_EVENT_DISPLAYSTYLE}'>
	  <div class='container-fluid'>
      <div class='row'>
        <div class='text-left col-xs-12' style='margin: 0 0 5px 0; padding: 10px 0; border-bottom: 1px solid #e1e1e1;'>{EC_EVENT_AUTHOR} {EC_EVENT_CAT_ICON} {EC_EVENT_CATEGORY} {EC_EVENT_CONTACT} {EC_EVENT_OPTIONS}</div>
        <div class='text-left col-xs-12' style='margin: 0 0 5px 0; padding: 10px 0; border-bottom: 1px solid #e1e1e1;'>{EC_EVENT_EVENT_DATE_TIME}</div>
		    {EC_EVENT_LOCATION}
		    {EC_EVENT_DETAILS}
		    {EC_EVENT_THREAD}
	    </div>
    </div>
	</div>
</div>";


//------------------------------------------
// CALENDAR CALENDAR - 'Big' calendar
//------------------------------------------
$CALENDAR_CALENDAR_START = "
<div id='calendar' class='cal-context' style='width: 100%;'>";

//header row
$CALENDAR_CALENDAR_HEADER_START = "
  <div class='cal-row-fluid cal-row-head'>";

$CALENDAR_CALENDAR_HEADER = "
    <div class='cal-cell1'>{EC_CALENDAR_CALENDAR_HEADER_DAY}</div>";
  
$CALENDAR_CALENDAR_HEADER_END = "
  </div>
  <div class='cal-month-box'>
    <div class='cal-row-fluid cal-before-eventlist'>";

$CALENDAR_CALENDAR_WEEKSWITCH = "
    </div>
    <div class='cal-row-fluid cal-before-eventlist'>";

//today
$CALENDAR_CALENDAR_DAY_TODAY = "
      <div class='cal-cell1 cal-cell cal-day-today'>
        {EC_CALENDAR_CALENDAR_DAY_TODAY_HEADING}";

//day has events
$CALENDAR_CALENDAR_DAY_EVENT = "
      <div class='cal-cell1 cal-cell cal-day-has-event'>
        {EC_CALENDAR_CALENDAR_DAY_EVENT_HEADING}";

// no events and not today
$CALENDAR_CALENDAR_DAY_EMPTY = "
      <div class='cal-cell1 cal-cell'>
        {EC_CALENDAR_CALENDAR_DAY_EMPTY_HEADING}";

$CALENDAR_CALENDAR_DAY_END = "
      </div>";

// 'Empty' cells where there's not a day at all
$CALENDAR_CALENDAR_DAY_NON = "
      <div class='cal-cell1 cal-cell'></div>";

$CALENDAR_CALENDAR_END = "
    </div>
  </div>
</div>";


// CALENDAR SHOW EVENT
$sc_style['EC_CALENDAR_CALENDAR_RECENT_ICON']['pre'] = "<span>";
$sc_style['EC_CALENDAR_CALENDAR_RECENT_ICON']['post'] = "</span>";

$CALENDAR_SHOWEVENT = "
      <div class='events-list-event'>
        {EC_CALENDAR_CALENDAR_RECENT_ICON}
        {EC_SHOWEVENT_IMAGE}
        {EC_SHOWEVENT_INDICAT}
        {EC_SHOWEVENT_HEADING}
      </div>";


//------------------------------------------
// Calendar menu - 'Small' calendar
//------------------------------------------
$CALENDAR_MENU_HDG_LINK_CLASS = "class='forumlink'";			// Class, and optional style, for menu heading if its a clickable link
$CALENDAR_MENU_START = "
<div class='text-center'>";
$CALENDAR_MENU_TABLE_START =  "
  <div id='calendar' class='cal-context' style='width: 100%;'>";

$CALENDAR_MENU_END = "
      </div>
    </div>
  </div>
</div>";

// Blank cells at beginning and end
$CALENDAR_MENU_DAY_NON = "<div class='cal-cell-menu cal-cell1 cal-cell' style='border: none;'></div>";

//header row
$CALENDAR_MENU_HEADER_START = "
    <div class='cal-row-fluid cal-row-head'>";
$CALENDAR_MENU_HEADER_FRONT = "
      <div class='cal-cell1'>
        <span class='smalltext'>";
$CALENDAR_MENU_HEADER_BACK = "
        </span>
      </div>";
$CALENDAR_MENU_HEADER_END = "
    </div>
    <div class='cal-month-box' style='border: none;'>
      <div class='cal-row-fluid cal-before-eventlist' style='border: none;'>
      ";


$CALENDAR_MENU_WEEKSWITCH = "</div><div class='cal-row-fluid cal-before-eventlist' style='border: none;'>";

// Start and end CSS for date cells - six cases to decode, determined by array index:
//     	1 - Today, no events
//		2 - Some other day, no events
//		3 - Today with events
//		4 - Some other day with events
//		5 - today with events, one or more of which has recently been added/updated
//		6 - Some other day with events, one or more of which has recently been added/updated


//today, no events
$CALENDAR_MENU_DAY_START['1'] = "
        <div class='cal-cell-menu text-center cal-cell1 cal-cell calmenu-day-today' style='border: none;'>";

// no events and not today
$CALENDAR_MENU_DAY_START['2'] = "
        <div class='cal-cell-menu text-center cal-cell1 cal-cell' style='border: none;'>";

//day has events - same whether its today or not
$CALENDAR_MENU_DAY_START['3'] = "
        <div class='cal-cell-menu text-center cal-cell1 cal-cell calmenu-day-has-event' style='border: none;'>";
$CALENDAR_MENU_DAY_START['4'] = "
        <div class='cal-cell-menu text-center cal-cell1 cal-cell calmenu-day-has-event' style='border: none;'>";
// day has events, one which is recently added/updated
$CALENDAR_MENU_DAY_START['5'] = "
        <div class='cal-cell-menu text-center cal-cell1 cal-cell calmenu-day-has-event' style='border: none;'>";
$CALENDAR_MENU_DAY_START['6'] = "
        <div class='cal-cell-menu text-center cal-cell1 cal-cell calmenu-day-has-event' style='border: none;'>";

// Example highlight using background colour:
//$CALENDAR_MENU_DAY_START['5'] = "<td class='indent' style='width:14.28%; padding:1px; text-align:center; background-color: #FF8000;'>";
//$CALENDAR_MENU_DAY_START['6'] = "<td class='indent' style='width:14.28%; padding:1px; text-align:center; background-color: #FF0000; '>";
 
 
$CALENDAR_MENU_DAY_END['1'] = "</div>";
$CALENDAR_MENU_DAY_END['2'] = "</div>";
$CALENDAR_MENU_DAY_END['3'] = "</div>";
$CALENDAR_MENU_DAY_END['4'] = "</div>";
$CALENDAR_MENU_DAY_END['5'] = "</div>";
$CALENDAR_MENU_DAY_END['6'] = "</div>";

//============================================================================
// Next event menu template
$sc_style['EC_NEXT_EVENT_TIME']['pre'] = EC_LAN_144;
$sc_style['EC_NEXT_EVENT_TIME']['post'] = "";
// Following are original styles
//$sc_style['NEXT_EVENT_ICON']['pre'] = "<img style='border:0px' src='";
//$sc_style['NEXT_EVENT_ICON']['post'] = "' alt='' />&nbsp;";
// Following to 'float right' on a larger icon
$sc_style['EC_NEXT_EVENT_ICON']['pre'] = "<img style='clear: right; float: left; margin: 0px 3px 0px 0px; padding:1px; border: 0px;' src='";
$sc_style['EC_NEXT_EVENT_ICON']['post'] = "' alt='' />";

if (!isset($EVENT_CAL_FE_LINE))
{  
  $EVENT_CAL_FE_LINE = "{EC_NEXT_EVENT_RECENT_ICON}{EC_NEXT_EVENT_ICON}{EC_NEXT_EVENT_DATE}{EC_NEXT_EVENT_TIME}<br /><strong>{EC_NEXT_EVENT_TITLE}</strong>{EC_NEXT_EVENT_GAP}";
}


?>