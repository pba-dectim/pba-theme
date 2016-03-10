<?php
/**
 * Template for displaying search forms in Twenty Sixteen
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

    <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
        <label>
            <div id='search-input-wrapper'>
                <span class="screen-reader-text">QUE RECHERCHEZ VOUS?</span>
                <input type="search" class="search-field" placeholder="QUE RECHERCHEZ VOUS?" value="" name="s" title="QUE RECHERCHEZ VOUS?" />
                <input type="submit" class="search-submit" value="RECHERCHER" />
            </div>


        </label>

    </form>