<?php
/**
 * Form Customization English lexicon topic
 *
 * @language en
 * @package modx
 * @subpackage lexicon
 */
$_lang['action'] = 'Tevékenység';
$_lang['action_desc'] = 'A művelet, amire ez a szabály vonatkozik.';
$_lang['activate'] = 'Működésbe léptet';
$_lang['constraint'] = 'Megszorítás';
$_lang['constraint_class'] = 'Megszorítási osztály';
$_lang['constraint_class_desc'] = 'Optional. If set, along with the Constraint Field and Constraint options, will restrict this rule to the constraints applied.';
$_lang['constraint_desc'] = 'Optional. The value of the Constraint Field that should be checked against.';
$_lang['constraint_field'] = 'Megszorítási mező';
$_lang['constraint_field_desc'] = 'Optional. The field by which this constraint should be applied.';
$_lang['containing_panel'] = 'Megszorítási panel';
$_lang['containing_panel_desc'] = 'The ID of the containing Form Panel the field is in. This is sometimes necessary for certain rules, so that the system can know what form or panel the field is in.';
$_lang['deactivate'] = 'Kikapcsol';
$_lang['default_value'] = 'Alapérték';
$_lang['export'] = 'Kivitel';
$_lang['fc.action_create'] = 'Tartalom létrehozása';
$_lang['fc.action_update'] = 'Erőforrás szerkesztése';
$_lang['fc.action_resource_wildcard'] = 'Erőforrás létrehozása és szerkesztése';
$_lang['field'] = 'Mező';
$_lang['field_desc'] = 'This is the field to affect. This may also be a tab, or TV. If it is a TV, please specify in this format: "tv#", where # is the ID of the TV.';
$_lang['field_default'] = 'Mező alapértelmezett értéke';
$_lang['field_label'] = 'Mező címkéje';
$_lang['field_visible'] = 'A mező látható';
$_lang['fields'] = 'Mezők';
$_lang['file'] = 'Állomány';
$_lang['filter_by_action'] = 'Szűrés működés alapján...';
$_lang['filter_by_rule_type'] = 'Szűrés szabály alapján...';
$_lang['filter_by_search'] = 'Keresés...';
$_lang['for_parent'] = 'Szülőnek';
$_lang['for_parent_desc'] = 'Check this when you want this rule to apply to the parent. Only use with Resources or objects with a `parent` field. Useful for the "create" page of Resources.';
$_lang['form_customization_msg'] = 'Itt található a jelenleg alkalmazott szabályok felsorolása. A szabályokról és az űrlapok testreszabásáról további tájékoztatás található <a href="https://docs.modx.com/3.x/en/building-sites/client-proofing/form-customization" target="_blank">itt</a>. Vegye figyelembe, hogy a nem megfelelő szabályok gondokat okozhatnak a telepített MODX Revolutionben. A nem használt szabályok halványított szürke színűek.';
$_lang['form_rules'] = 'Űrlapszabályok';
$_lang['import'] = 'Betöltés';
$_lang['import_from_xml'] = 'Készlet importálása XML-ből';
$_lang['label'] = 'Címke';
$_lang['original_value'] = 'Eredeti érték';
$_lang['profile'] = 'Profile';
$_lang['profile_create'] = 'Profil létrehozása';
$_lang['profile_err_nfs'] = 'Form Customization Profile not found with ID [[+id]].';
$_lang['profile_err_ns'] = 'Form Customization Profile not specified!';
$_lang['profile_err_remove'] = 'Hiba történt a profil törlése közben.';
$_lang['profile_err_save'] = 'An error occurred while trying to save the Profile.';
$_lang['profile_msg'] = 'Here you can specify Sets for this Profile. A Set is a collection of Rules that apply for a given page (Edit or Create Resource). They can also be restricted to certain Templates, or other field values on the Resource. Constraints for the Create Resource Sets will execute based on the parent of the newly created Resource\'s value.';
$_lang['profile_new'] = 'Űrlap-testreszabási profil létrehozása';
$_lang['profile_remove'] = 'Delete Profile';
$_lang['profile_remove_confirm'] = 'Biztosan véglegesen törli ezt a profilt? A művelet nem vonható vissza.';
$_lang['profile_remove_multiple'] = 'Delete Multiple Profiles';
$_lang['profile_remove_multiple_confirm'] = 'Biztosan véglegesen törli ezeket a profilokat? A művelet nem vonható vissza.';
$_lang['profile_usergroup_err_ae'] = 'That User Group is already assigned to this Profile!';
$_lang['profile_usergroups_msg'] = 'Here you can assign the User Groups that will use this Profile. If no User Groups are assigned, all Users will use this Profile.';
$_lang['profiles'] = 'Form Customization Profiles';
$_lang['profiles_msg'] = 'This is a list of your Form Customization Profiles. Profiles can contain many Form Customization Rules, and can be activated or deactivated. They can also be configured to only apply to certain User Groups.';
$_lang['rank'] = 'Rangsor';
$_lang['rank_desc'] = 'The order the Rule is executed in. A lower number means that it will be executed earlier.';
$_lang['region'] = 'Körzet';
$_lang['regions'] = 'Körzetek';
$_lang['rule'] = 'Szabály';
$_lang['rule_create'] = 'Szabály létrehozása';
$_lang['rule_desc'] = 'The type of Rule that will be applied to this field.';
$_lang['rule_description_desc'] = 'Optional. A description of the rule.';
$_lang['rule_err_ae'] = 'Már létezik szabály ehhez a mezőhöz!';
$_lang['rule_err_duplicate'] = 'Hiba történt a szabály kettőzésekor.';
$_lang['rule_err_nf'] = 'Szabály nem található.';
$_lang['rule_err_ns'] = 'Szabály nincs megadva.';
$_lang['rule_err_remove'] = 'Hiba történt a szabály törlése közben.';
$_lang['rule_err_save'] = 'Hiba történt a szabály mentése közben.';
$_lang['rule_remove'] = 'Szabály törlése';
$_lang['rule_remove_confirm'] = 'Biztosan törli ezt a szabályt?';
$_lang['rule_remove_multiple'] = 'Több szabály törlése';
$_lang['rule_remove_multiple_confirm'] = 'Biztosan véglegesen törli ezeket a szabályokat? A művelet nem vonható vissza.';
$_lang['rule_update'] = 'Szabály szerkesztése';
$_lang['rule_value_desc'] = 'A szabályban beállítandó érték.';
$_lang['rules'] = 'Szabályok';
$_lang['set'] = 'Beállít';
$_lang['set_and_fields'] = 'Set Information and Fields';
$_lang['set_change_template'] = 'Change Template For Set';
$_lang['set_change_template_confirm'] = 'Are you sure you want to do this? This will change the Template that these Rules apply to. If so, MODX will first save your changes before reloading the page to refresh the new TVs for the new Template.';
$_lang['set_constraint_field_desc'] = 'Setting the Constraint field will prevent the rules in this Set from executing unless the field for this Resource matches the "constraint" value.';
$_lang['set_constraint_desc'] = 'Set the value of the field (specified above) to restrict the rules in this Set from being executed unless the Resource has this value on the specified constraint field.';
$_lang['set_create'] = 'Készlet létrehozása';
$_lang['set_err_nfs'] = 'No Set found with ID [[+id]]';
$_lang['set_err_ns'] = 'No Set specified.';
$_lang['set_fields_msg'] = 'Itt állíthatja be az oldal mezőit, a láthatósággal és a címmel együtt. A sor értéke kettős kattintás után szerkeszthető. Hagyja üresen a mezőket az alapértelmezett beállítások használatához.<br>Ne feledje: egy elem elrejtése ebben a profilban magával hozza, hogy az átfedő profilokban is rejtett lesz (még ha a Látható be is van jelölve).';
$_lang['set_import_err_upload'] = 'An error occurred while trying to find the XML file. Please specify a valid file.';
$_lang['set_import_err_xml'] = 'An error occurred importing the XML file. Please ensure you specified a valid Form Customization Set XML File.';
$_lang['set_import_msg'] = 'Select an XML file to import a Form Customization Set from. It must be in the correct XML Form Customization format.';
$_lang['set_import_template_err_nf'] = 'Sablon nem található az űrlap-testreszabási készlet betöltésekor.';
$_lang['set_msg'] = 'Here you can edit what fields, tabs and Template Variables show for this page, as well as their labels and default values. Just double-click on a column to edit its value. You can also use the tab key to progress through the grid. Leave a field blank to use the default setting.';
$_lang['set_new'] = 'Készlet létrehozása';
$_lang['set_edit'] = 'Értékek módosítása';
$_lang['set_remove'] = 'Delete Set';
$_lang['set_remove_confirm'] = 'Biztosan véglegesen törli ezt a készletet? A művelet nem vonható vissza.';
$_lang['set_remove_multiple'] = 'Delete Multiple Sets';
$_lang['set_remove_multiple_confirm'] = 'Biztosan véglegesen törli ezeket a készleteket? A művelet nem vonható vissza.';
$_lang['set_tab_err_ae'] = 'A tab already exists with that ID. Please specify another.';
$_lang['set_tabs_msg'] = 'Itt állíthatja be a lap füleit és körzetét, a láthatósággal és a címmel együtt. A sor értéke kettős kattintás után szerkeszthető. Hagyja üresen a mezőket az alapértelmezett beállítások használatához.<br>Ne feledje: egy elem elrejtése ebben a profilban magával hozza, hogy az átfedő profilokban is rejtett lesz (még ha a Látható be is van jelölve).';
$_lang['set_template_desc'] = 'Choosing a Template will limit the rules in the Set from executing unless the Resource has the specified Template.';
$_lang['set_tvs_msg'] = 'Here you can set visibility, labels, default values and the tabs they reside in by double-clicking on the row in the grid. Note: If you move a TV to another Region, you can adjust the order of the TV in the "Region Rank" field. Leave a field empty to use the default setting.';
$_lang['sets'] = 'Form Customization Sets';
$_lang['simplexml_err_nf'] = 'MODX requires the SimpleXML PHP extension to use this feature. Please ensure the extension is installed before continuing.';
$_lang['tab'] = 'Lap';
$_lang['tab_create'] = 'Lap létrehozása';
$_lang['tab_id'] = 'Azonosító';
$_lang['tab_name'] = 'Lap neve';
$_lang['tab_title'] = 'Cím';
$_lang['tab_new'] = 'Lap létrehozása';
$_lang['tab_rank'] = 'Területi rangsor';
$_lang['tab_remove'] = 'Lap törlése';
$_lang['tab_remove_confirm'] = 'Biztosan törli ezt a lapot?';
$_lang['tab_visible'] = 'Lap látható';
$_lang['tabs'] = 'Lapok';
$_lang['tv'] = 'Sablonváltozó';
$_lang['tv_default'] = 'Sablonváltozó alapértéke';
$_lang['tv_label'] = 'Sablonváltozó megnevezése';
$_lang['tv_name'] = 'Név';
$_lang['tv_move'] = 'Sablonváltozó mozgatása laphoz';
$_lang['tv_visible'] = 'Sablonváltozó látható';
$_lang['tvs'] = 'Sablonváltozók';
$_lang['usergroup'] = 'Felhasználói csoport';
$_lang['usergroup_create'] = 'Felhasználói csoport létrehozása';
$_lang['usergroup_desc'] = 'Optional. If set, will restrict this Profile to only Users in the specified User Group.';
$_lang['usergroup_remove'] = 'Felhasználói csoport törlése profilból';
$_lang['usergroup_remove_confirm'] = 'Are you sure you want this Profile to no longer apply to Users in this User Group?';
$_lang['usergroups'] = 'Felhasználói csoportok';
$_lang['visible'] = 'Látható';
$_lang['xmlwriter_err_nf'] = 'Ehhez a működéshez a MODX az XMLWriter PHP kiterjesztést használja. Folytatás előtt ellenőrizze, hogy ez a kitejesztés telepítve van-e.';
