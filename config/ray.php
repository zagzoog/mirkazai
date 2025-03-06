<?php

return [
    /*
     * This settings controls whether data should be sent to Ray.
     */
    'enable' => false,

    /*
     * When enabled, all things logged to the application log
     * will be sent to Ray as well.
     */
    'send_log_calls_to_ray' => false,

    /*
     * When enabled, all things passed to dump or dd
     * will be sent to Ray as well.
     */
    'send_dumps_to_ray' => false,
]; 