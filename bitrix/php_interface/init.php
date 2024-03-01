<?

define('FORM_IBLOCK_ID', 8);
AddEventHandler("iblock", "OnAfterIBlockElementAdd", "sendMailOrder");
function sendMailOrder(&$arFields)
{
	global $APPLICATION;
	if ($arFields["IBLOCK_ID"] == 8) {
		$arEventFields = array(
			"NAME" => $arFields['NAME'],
			"PHONE" => $arFields['PROPERTY_VALUES'][5],			
		);
		CEvent::Send("FORM_FEEDBACK", SITE_ID, $arEventFields, 'Y');			
	}
}
AddEventHandler("main", "OnEpilog", "OnEpilog");
function OnEpilog()
{
	global $APPLICATION;
	if (isset($_GET['PAGEN_1']) && $_GET['PAGEN_1'] > 1) {
		$TITLE = $APPLICATION->GetPageProperty("TITLE");
		$APPLICATION->SetPageProperty("TITLE", $TITLE . ' | Страница ' . $_GET['PAGEN_1']);
		$DESCRIPTION = $APPLICATION->GetPageProperty("DESCRIPTION");
		$APPLICATION->SetPageProperty("DESCRIPTION", trim($DESCRIPTION) . ' - Страница ' . $_GET['PAGEN_1']);
		$APPLICATION->AddHeadString('<link rel="canonical" href="https://' . $_SERVER['SERVER_NAME'] . $APPLICATION->GetCurDir() . '" />', true);
	}
}