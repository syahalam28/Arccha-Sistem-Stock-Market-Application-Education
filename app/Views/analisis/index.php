<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="container-fluid">
    <div class="row">
        <div style="width: 100%; height: 610px;" class="tradingview-widget-container" id="tvchart">

        </div>
    </div>

</div>
<!-- <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/NASDAQ-AAPL/" rel="noopener" target="_blank"><span class="blue-text">AAPL Chart</span></a> by TradingView</div> -->
<script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
<script type="text/javascript">
    new TradingView.widget({
        "autosize": true,
        "symbol": "NASDAQ:AAPL",
        "interval": "1",
        "timezone": "Asia/Jakarta",
        "theme": "light",
        "style": "1",
        "locale": "en",
        "toolbar_bg": "#f1f3f6",
        "enable_publishing": false,
        "withdateranges": true,
        // "range": "YTD",
        "hide_side_toolbar": false,
        "allow_symbol_change": true,
        "details": true,
        "hotlist": true,
        "calendar": true,
        "container_id": "tvchart"
    });
</script>

<?= $this->endSection(); ?>