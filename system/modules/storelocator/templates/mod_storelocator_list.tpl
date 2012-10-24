<!-- indexer::stop -->
<div class="<?php echo $this->class; ?> block"<?php echo $this->cssID; ?><?php if ($this->style): ?> style="<?php echo $this->style; ?>"<?php endif; ?>>

	<?php if( $this->headline ) { ?>
		<<?php echo $this->hl; ?>><?php echo $this->headline; ?></<?php echo $this->hl; ?>>
	<?php } ?>

    
    <?php if( !$this->error ) { ?>
        <?php foreach( $this->entries as $entry ) { ?>
        <div class="entry">
            <h3><?php echo $entry['name']; ?></h3>
            <?php if( $entry['distance'] ) { ?>
            <em><?php echo $GLOBALS['TL_LANG']['tl_storelocator']['field']['distance']; ?> <?php echo number_format($entry['distance'],2,',','.'); ?>km</em>
            <?php } ?>
            <p>
                <?php echo $entry['street']; ?><br />
                <?php echo $entry['postal']; ?> <?php echo $entry['city']; ?><br />
                <?php echo $entry['country_name']; ?>
            </p>
            <p>
                <?php if( $this->entry['phone'] ) { ?><?php echo $GLOBALS['TL_LANG']['tl_storelocator']['field']['phone']; ?>: <?php echo $this->entry['phone']; ?><br /><?php } ?>
                <?php if( $this->entry['fax'] ) { ?><?php echo $GLOBALS['TL_LANG']['tl_storelocator']['field']['fax']; ?>: <?php echo $this->entry['fax']; ?><br /><?php } ?>
                <?php if( $this->entry['email'] ) { ?><?php echo $GLOBALS['TL_LANG']['tl_storelocator']['field']['email']; ?>: {{email::<?php echo $this->entry['email']; ?>}}<br /><?php } ?>
                <?php if( $this->entry['url'] ) { ?><?php echo $GLOBALS['TL_LANG']['tl_storelocator']['field']['www']; ?>: <a href="<?php echo $this->entry['url']; ?>" target="_blank" title="<?php echo $this->entry['name']; ?>"><?php echo $this->entry['url']; ?></a><br /><?php } ?>
            </p>
            <?php if( !empty($entry['opening_times']) ) { ?>		
            <ul class="times">
                <?php foreach( $entry['opening_times'] as $i => $v ) { ?>
                <li>
                    <?php echo $GLOBALS['TL_LANG']['tl_storelocator']['weekdays'][ $v['weekday'] ];?> <?php echo $v['from']; ?> - <?php echo $v['to']; ?>
                </li>
                <?php } ?>
            </ul>
            <?php } ?>
            <?php if( $entry['link'] ) { ?>
                <a href="<?php echo $entry['link']; ?>" class="more"><?php echo $GLOBALS['TL_LANG']['tl_storelocator']['field']['more']; ?></a>
            <?php } ?>
        </div>
        <?php } ?>
    <?php } else { ?>
        <p class="error"><?php echo $GLOBALS['TL_LANG']['tl_storelocator']['noresults']; ?></p>
    <?php } ?>

</div>
<!-- indexer::continue -->