<?php
// This file declares a managed database record of type "ReportTemplate".
// The record will be automatically inserted, updated, or deleted from the
// database as appropriate. For more details, see "hook_civicrm_managed" at:
// http://wiki.civicrm.org/confluence/display/CRMDOC42/Hook+Reference
return array (
  0 => 
  array (
    'name' => 'CRM_Retention_Form_Report_Retention',
    'entity' => 'ReportTemplate',
    'params' => 
    array (
      'version' => 3,
      'label' => 'Retention',
      'description' => 'Retention (uk.teamsinger.civicrm.reports.retention)',
      'class_name' => 'CRM_Retention_Form_Report_Retention',
      'report_url' => 'uk.teamsinger.civicrm.reports.retention/retention',
      'component' => 'CiviMember',
    ),
  ),
);