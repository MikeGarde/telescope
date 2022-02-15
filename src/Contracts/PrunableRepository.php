<?php

namespace Laravel\Telescope\Contracts;

use DateTimeInterface;

interface PrunableRepository
{
    /**
     * Prune all the entries older than the given date.
     *
     * @param  \DateTimeInterface  $before
     * @param  int $chunkSize
     * @return mixed
     */
    public function prune(DateTimeInterface $before, int $chunkSize);
}
