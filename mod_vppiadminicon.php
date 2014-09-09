<?php
// no direct access
defined('_JEXEC') or die;

//get params
$db = JFactory::getDbo();
$query = $db->getQuery(true)->select('*')->from($db->qn('#__lfcoursemanager_settings'));
$settings = $db->setQuery($query, 0, 1)->loadObject();
$sugarParams = json_decode($settings->params)->survey_settings;
$key = $sugarParams->crnkey;
unset($db, $query, $settings, $sugarParams);
?>
<div id="cpanel">
    <div>
        <div class="icon">
            <a href="/index.php?option=com_lfcoursemanager&view=sugarimport&key=<?php echo $key; ?>" target="_blank">
                <i class="icon-cube"></i> <span><?php echo JText::_('Run Sugar CRM Import'); ?></span></a>
        </div>
    </div>
</div>
