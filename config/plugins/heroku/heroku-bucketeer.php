<?php
/**
 * Configuration - Database: Heroku Bucketeer
 * @url: https://elements.heroku.com/addons/bucketeer
 */
if (!empty(getenv('BUCKETEER_AWS_ACCESS_KEY_ID'))) {
    // TODO: Handle custom regions
    // s3-eu-central-1.amazonaws.com
    // ...
    putenv(sprintf('AWS_S3_URL=s3://%s:%s@s3-%s.amazonaws.com/%s',
        getenv("BUCKETEER_AWS_ACCESS_KEY_ID"),
        getenv("BUCKETEER_AWS_SECRET_ACCESS_KEY"),
        getenv("BUCKETEER_AWS_REGION"),
        getenv("BUCKETEER_BUCKET_NAME")));
}
