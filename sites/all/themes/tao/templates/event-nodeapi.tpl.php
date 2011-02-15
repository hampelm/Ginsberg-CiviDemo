<?php
// $Id: event-nodeapi.tpl.php,v 1.4 2008/12/17 23:00:20 killes Exp $

/**
 * @file event-nodeapi.tpl.php
 * Display an event in the node view.
 *
 * Available variables:
 * - $node_type: Node type
 * - $show_end: If the end date should be shown
 * - $start_date: The unformatted start date
 * - $end_date: The unformatted end date
 * - $start_date_utc: The unformatted start date (UTC)
 * - $end_date_utc: The unformatted end date (UTC)
 * - $start_date_formatted: The formatted start date (Y-m-d), according to the chosen settings
 * - $end_date_formatted: The formatted end date (Y-m-d), according to the chosen settings
 * - $start_time_formatted: The formatted start time, according to the chosen settings
 * - $end_time_formatted: The formatted end time, according to the chosen settings
 *
 * @see template_preprocess_event_nodeapi()
 */
?>

<div class="event">
    <div class="<?php print $node_type ?>-start dtstart" title="<?php print $start_date_utc ?>">
        <?php
        $start_date = strtotime($start_date);
        
        ?>
        <span class="weekday">
            <?php print gmdate('l', $start_date)?>
        </span>
        <span class="date">
           <?php print gmdate('j', $start_date)?>
        </span>
        <span class="month">
            <?php print gmdate('F', $start_date)?>
        </span>
        <span class="time">
            <?php print $start_time_formatted ?>
        </span>
         
    </div>
</div>

<?php if ($show_end) { ?>
    <span class="until">Until: <?php print "$end_date_formatted $end_time_formatted" ?></span>
<?php } ?>

<?php if (variable_get('configurable_timezones', 1)) {
 $zone = event_zonelist_by_id($node->event['timezone']); ?>
    <div class="event-nodeapi">
        <div class="<?php print $node_type ?>-tz"><label><?php print t('Timezone: ') ?></label><?php print t($zone['name']) ?> </div>
    </div>
<?php } ?>