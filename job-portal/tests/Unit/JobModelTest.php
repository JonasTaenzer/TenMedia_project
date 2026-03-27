<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Job;

class JobModelTest extends TestCase
{
    public function test_job_has_fillable_attributes(): void
    {
        $job = new Job();

        $this->assertContains('title', $job->getFillable());
        $this->assertContains('description', $job->getFillable());
        $this->assertContains('location', $job->getFillable());
        $this->assertContains('salary', $job->getFillable());
    }
}