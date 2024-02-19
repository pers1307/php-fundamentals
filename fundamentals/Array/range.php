<?php

/**
 * Создаёт массив, содержащий диапазон элементов
 */

echo implode(', ', range(0, 12)), PHP_EOL;

echo implode(', ', range(0, 100, 10)), PHP_EOL;

echo implode(', ', range('a', 'i')), PHP_EOL;

echo implode(', ', range('c', 'a')), PHP_EOL;

echo implode(', ', range('A', 'z')), PHP_EOL;

// 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12
// 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100
// a, b, c, d, e, f, g, h, i
// c, b, a
// A, B, C, D, E, F, G, H, I, J, K, L, M, N, O, P, Q, R, S, T, U, V, W, X, Y, Z, [, \, ], ^, _, `, a, b, c, d, e, f, g, h, i, j, k, l, m, n, o, p, q, r, s, t, u, v, w, x, y, z
