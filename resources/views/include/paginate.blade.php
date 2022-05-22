<?php
// config
$link_limit = 7; // maximum number of links (a little bit inaccurate, but will be ok for now)
?>

@if ($paginator->lastPage() > 1)
<div class="row" data-aos="fade">
    <div class="col-12">
        <div class="custom-pagination">
            <ul class="list-unstyled">
                @for ($i = 1; $i <= $paginator->lastPage(); $i++)
                    <?php
                    $half_total_links = floor($link_limit / 2);
                    $from = $paginator->currentPage() - $half_total_links;
                    $to = $paginator->currentPage() + $half_total_links;
                    if ($paginator->currentPage() < $half_total_links) {
                        $to += $half_total_links - $paginator->currentPage();
                    }
                    if ($paginator->lastPage() - $paginator->currentPage() < $half_total_links) {
                        $from -= $half_total_links - ($paginator->lastPage() - $paginator->currentPage()) - 1;
                    }
                    ?>
                    @if ($from < $i && $i < $to) <li class="{{ ($paginator->currentPage() == $i) ? ' active' : '' }}">
                        <span><a href="{{ $paginator->url($i) }}" style="background: inherit;color: inherit;margin: 0;">{{ $i }}</a></span>
                        </li>
                        @endif
                        @endfor
            </ul>
        </div>
    </div>
</div>
@endif