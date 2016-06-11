<?php

function from(\DateTimeInterface $dateTime)
{
  $dateTimeImmutable = \DateTimeImmutable::createFromMutable($dateTime);

  return $dateTimeImmutable->add(new \DateInterval("PT1000000000S"));
}
