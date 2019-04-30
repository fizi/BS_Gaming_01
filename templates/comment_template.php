<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2009 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 *
 *
 * $Source: /cvs_backup/e107_0.8/e107_themes/templates/comment_template.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }
if (!defined("USER_WIDTH")){ define("USER_WIDTH", "width:100%"); }

global $sc_style;
global $pref, $comrow, $row2, $tp, $NEWIMAGE, $USERNAME, $RATING;

$sc_style['SUBJECT']['pre'] = "";
$sc_style['SUBJECT']['post'] = "";

$sc_style['USERNAME']['pre'] = "";
$sc_style['USERNAME']['post'] = "";

$sc_style['TIMEDATE']['pre'] = "<small>";
$sc_style['TIMEDATE']['post'] = "</small>";

$sc_style['AVATAR']['pre'] = "";
$sc_style['AVATAR']['post'] = "";

$sc_style['COMMENTS']['pre'] = "";
$sc_style['COMMENTS']['post'] = "<br />";

$sc_style['JOINED']['pre'] = "";
$sc_style['JOINED']['post'] = "<br />";

$sc_style['COMMENT']['pre'] = "";
$sc_style['COMMENT']['post'] = "<br />";

$sc_style['RATING']['pre'] = "";
$sc_style['RATING']['post'] = "<br />";

$sc_style['IPADDRESS']['pre'] = "";
$sc_style['IPADDRESS']['post'] = "<br />";

$sc_style['LEVEL']['pre'] = "";
$sc_style['LEVEL']['post'] = "<br />";

$sc_style['LOCATION']['pre'] = "";
$sc_style['LOCATION']['post'] = "<br />";

$sc_style['SIGNATURE']['pre'] = "";
$sc_style['SIGNATURE']['post'] = "<br />";



// from e107.org 
$sc_style['REPLY']['pre'] 				= "<span class='comment-reply'>";
$sc_style['REPLY']['post'] 				= "</span>";

$sc_style['COMMENTEDIT']['pre']  		= '<span class="comment-edit">';
$sc_style['COMMENTEDIT']['post'] 		= '</span>';

$sc_style['COMMENT_AVATAR']['pre']  	= '<div class="hidden-xs comment-avatar">';
$sc_style['COMMENT_AVATAR']['post'] 	= '</div>';

$sc_style['SUBJECT_INPUT']['pre']		= ""; //COMLAN_324
$sc_style['SUBJECT_INPUT']['post']		= "";

$sc_style['AUTHOR_INPUT']['pre']		= ""; // COMLAN_16
$sc_style['AUTHOR_INPUT']['post']		= "";

$sc_style['COMMENT_INPUT']['pre']		= "";// COMLAN_8
$sc_style['COMMENT_INPUT']['post']		= "";

$sc_style['COMMENT_BUTTON']['pre']		= "";
$sc_style['COMMENT_BUTTON']['post']		= "";

$sc_style['COMMENT_SHARE']['pre']		= "";
$sc_style['COMMENT_SHARE']['post']		= "";

$sc_style['COMMENT_RATE']['pre']  		= '';
$sc_style['COMMENT_RATE']['post'] 		= '';

//$sc_style['USER_AVATAR']['pre']  		= '<div class="comment-avatar center">';
//$sc_style['USER_AVATAR']['post'] 		= '</div>';

$sc_style['COMMENT_MODERATE']['pre']	= '<span class="comment-moderate">';
$sc_style['COMMENT_MODERATE']['post']	= '</span>';

$sc_style['MODERATE']['pre']	= '<div class="span12" style="padding:10px">';
$sc_style['MODERATE']['post']	= '</div>';


$COMMENT_TEMPLATE['form'] = "  
{SETIMAGE: w=100&h=100}  
<div class='comment-box-form'>
	{COMMENT_AVATAR}
	<div class='comment-box-right' >
		<div class='P10'>
			{AUTHOR_INPUT}
			{COMMENT_INPUT}
			<div id='commentformbutton'>
				{COMMENT_BUTTON}
				{COMMENT_SHARE}
			</div>
		</div>
	</div>
</div>"; 


$COMMENT_TEMPLATE['item'] = " 
{SETIMAGE: w=100&h=100}
<div class='comment-box-comment'>
	{COMMENT_AVATAR}	
	<div class='comment-box-right'>
		<div class='row'>				
			<div class='comment-box-username col-md-3'>{USERNAME}</div>
			<div class='comment-box-date col-md-3'>{TIMEDATE=relative}</div>
			<div class='comment-status col-md-3 text-center'>{COMMENT_STATUS}</div>
			<div class='comment-rate col-md-3 text-right'>{COMMENT_RATE}</div>				
		</div>			
		<div class='row'>	
			<div class='col-xs-12' id='{COMMENT_ITEMID}-edit' contentEditable='false'>
				<div class='comment-text'>{COMMENT}</div>
      </div>
		</div>
    <div class='row'>
      <div class='col-md-3 pull-left comment-reply'>{REPLY}</div>
      <div class='col-md-9 pull-right text-right comment-moderate'>{COMMENTEDIT} {COMMENT_MODERATE}</div>
    </div>
	</div>	
</div>";

$COMMENT_TEMPLATE['layout'] = " 
{COMMENTFORM}
{COMMENTS}   
<div style='padding:10px 0px'>{MODERATE}</div>";
										

?>