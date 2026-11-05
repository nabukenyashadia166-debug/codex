<?php

namespace Database\Seeders\Support;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

/** Shared helpers for seeders that must coexist with the database branch. */
trait SeedData
{
    protected function existingColumns(string $table, array $values): array
    {
        if (! Schema::hasTable($table)) {
            return [];
        }

        return array_filter(
            $values,
            fn ($value, $column) => Schema::hasColumn($table, $column),
            ARRAY_FILTER_USE_BOTH
        );
    }

    protected function firstOrCreateBy(string $table, array $identity, array $values): object
    {
        if (! Schema::hasTable($table)) {
            throw new \RuntimeException("Cannot seed {$table}: its table does not exist. Run the project migrations first.");
        }

        $identity = $this->existingColumns($table, $identity);
        $values = $this->existingColumns($table, $values);

        if ($identity === []) {
            throw new \RuntimeException("Cannot seed {$table}: no matching identity columns were found.");
        }

        $record = DB::table($table)->where($identity)->first();

        if ($record) {
            $updates = array_diff_key($values, $identity);
            if ($updates !== []) {
                DB::table($table)->where($identity)->update($updates);
            }

            return DB::table($table)->where($identity)->first();
        }

        $id = DB::table($table)->insertGetId($values);

        return DB::table($table)->where('id', $id)->first();
    }
}
