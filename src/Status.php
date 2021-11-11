<?php

namespace iaretedd\Http;


class Status
{
    //region 1xx informational response
    /* [RFC-ietf-httpbis-semantics, Section 15.2.1] */
    const CONTINUE = 100;

    /* [RFC-ietf-httpbis-semantics, Section 15.2.2] */
    const SWITCHING_PROTOCOLS = 101;

    /* [RFC2518] */
    const PROCESSING = 102;

    /* [RFC8297] */
    const EARLY_HINTS = 103;
    //endregion

    //region 2xx successful
    /* [RFC-ietf-httpbis-semantics, Section 15.3.1] */
    const OK = 200;

    /* [RFC-ietf-httpbis-semantics, Section 15.3.2] */
    const CREATED = 201;

    /* [RFC-ietf-httpbis-semantics, Section 15.3.3] */
    const ACCEPTED = 202;

    /* [RFC-ietf-httpbis-semantics, Section 15.3.4] */
    const NON_AUTHORITATIVE_INFORMATION = 203;

    /* [RFC-ietf-httpbis-semantics, Section 15.3.5] */
    const NO_CONTENT = 204;

    /* [RFC-ietf-httpbis-semantics, Section 15.3.6] */
    const RESET_CONTENT = 205;

    /* [RFC-ietf-httpbis-semantics, Section 15.3.7] */
    const PARTIAL_CONTENT = 206;

    /* [RFC4918] */
    const MULTI_STATUS = 207;

    /* [RFC5842] */
    const ALREADY_REPORTED = 208;

    /* [RFC3229] */
    const IM_USED = 226;
    //endregion

    //region 3xx redirection
    /* [RFC-ietf-httpbis-semantics, Section 15.4.1] */
    const MULTIPLE_CHOICES = 300;

    /* [RFC-ietf-httpbis-semantics, Section 15.4.2] */
    const MOVED_PERMANENTLY = 301;

    /* [RFC-ietf-httpbis-semantics, Section 15.4.3] */
    const FOUND = 302;

    /* [RFC-ietf-httpbis-semantics, Section 15.4.4] */
    const SEE_OTHER = 303;

    /* [RFC-ietf-httpbis-semantics, Section 15.4.5] */
    const NOT_MODIFIED = 304;

    /* [RFC-ietf-httpbis-semantics, Section 15.4.6] */
    const USE_PROXY = 305;

    /* [RFC-ietf-httpbis-semantics, Section 15.4.8] */
    const TEMPORARY_REDIRECT = 307;

    /* [RFC-ietf-httpbis-semantics, Section 15.4.9] */
    const PERMANENT_REDIRECT = 308;
    //endregion

    //region 4xx client error
    /* [RFC-ietf-httpbis-semantics, Section 15.5.1] */
    const BAD_REQUEST = 400;

    /* [RFC-ietf-httpbis-semantics, Section 15.5.2] */
    const UNAUTHORIZED = 401;

    /* [RFC-ietf-httpbis-semantics, Section 15.5.3] */
    const PAYMENT_REQUIRED = 402;

    /* [RFC-ietf-httpbis-semantics, Section 15.5.4] */
    const FORBIDDEN = 403;

    /* [RFC-ietf-httpbis-semantics, Section 15.5.5] */
    const NOT_FOUND = 404;

    /* [RFC-ietf-httpbis-semantics, Section 15.5.6] */
    const METHOD_NOT_ALLOWED = 405;

    /* [RFC-ietf-httpbis-semantics, Section 15.5.7] */
    const NOT_ACCEPTABLE = 406;

    /* [RFC-ietf-httpbis-semantics, Section 15.5.8] */
    const PROXY_AUTHENTICATION_REQUIRED = 407;

    /* [RFC-ietf-httpbis-semantics, Section 15.5.9] */
    const REQUEST_TIMEOUT = 408;

    /* [RFC-ietf-httpbis-semantics, Section 15.5.10] */
    const CONFLICT = 409;

    /* [RFC-ietf-httpbis-semantics, Section 15.5.11] */
    const GONE = 410;

    /* [RFC-ietf-httpbis-semantics, Section 15.5.12] */
    const LENGTH_REQUIRED = 411;

    /* [RFC-ietf-httpbis-semantics, Section 15.5.13] */
    const PRECONDITION_FAILED = 412;

    /* [RFC-ietf-httpbis-semantics, Section 15.5.14] */
    const CONTENT_TOO_LARGE = 413;

    /* [RFC-ietf-httpbis-semantics, Section 15.5.15] */
    const URI_TOO_LONG = 414;

    /* [RFC-ietf-httpbis-semantics, Section 15.5.16] */
    const UNSUPPORTED_MEDIA_TYPE = 415;

    /* [RFC-ietf-httpbis-semantics, Section 15.5.17] */
    const RANGE_NOT_SATISFIABLE = 416;

    /* [RFC-ietf-httpbis-semantics, Section 15.5.18] */
    const EXPECTATION_FAILED = 417;

    /* [RFC-ietf-httpbis-semantics, Section 15.5.20] */
    const MISDIRECTED_REQUEST = 421;

    /* [RFC-ietf-httpbis-semantics, Section 15.5.21] */
    const UNPROCESSABLE_CONTENT = 422;

    /* [RFC4918] */
    const LOCKED = 423;

    /* [RFC4918] */
    const FAILED_DEPENDENCY = 424;

    /* [RFC8470] */
    const TOO_EARLY = 425;

    /* [RFC-ietf-httpbis-semantics, Section 15.5.22] */
    const UPGRADE_REQUIRED = 426;

    /* [RFC6585] */
    const PRECONDITION_REQUIRED = 428;

    /* [RFC6585] */
    const TOO_MANY_REQUESTS = 429;

    /* [RFC6585] */
    const REQUEST_HEADER_FIELDS_TOO_LARGE = 431;

    /* [RFC7725] */
    const UNAVAILABLE_FOR_LEGAL_REASONS = 451;
    //endregion

    //region 5xx server error
    /* [RFC-ietf-httpbis-semantics, Section 15.6.1] */
    const INTERNAL_SERVER_ERROR = 500;

    /* [RFC-ietf-httpbis-semantics, Section 15.6.2] */
    const NOT_IMPLEMENTED = 501;

    /* [RFC-ietf-httpbis-semantics, Section 15.6.3] */
    const BAD_GATEWAY = 502;

    /* [RFC-ietf-httpbis-semantics, Section 15.6.4] */
    const SERVICE_UNAVAILABLE = 503;

    /* [RFC-ietf-httpbis-semantics, Section 15.6.5] */
    const GATEWAY_TIMEOUT = 504;

    /* [RFC-ietf-httpbis-semantics, Section 15.6.6] */
    const HTTP_VERSION_NOT_SUPPORTED = 505;

    /* [RFC2295] */
    const VARIANT_ALSO_NEGOTIATES = 506;

    /* [RFC4918] */
    const INSUFFICIENT_STORAGE = 507;

    /* [RFC5842] */
    const LOOP_DETECTED = 508;

    /* [RFC2774] */
    const NOT_EXTENDED = 510;

    /* [RFC6585] */
    const NETWORK_AUTHENTICATION_REQUIRED = 511;
    //endregion

    public static function informational(int $code): bool
    {
        return ($code >= 100 && $code < 200);
    }

    public static function successful(int $code): bool
    {
        return ($code >= 200 && $code < 300);
    }

    public static function redirection(int $code): bool
    {
        return ($code >= 300 && $code < 400);
    }

    public static function clientError(int $code): bool
    {
        return ($code >= 400 && $code < 500);
    }

    public static function serverError(int $code): bool
    {
        return ($code >= 500 && $code < 600);
    }
}
