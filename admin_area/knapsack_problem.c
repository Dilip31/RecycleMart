#include <stdio.h>
#include <stdlib.h>

int main() {
    int n, capacity;
    printf("Enter the number of items: ");
    scanf("%d", &n);

    printf("Enter the capacity of the knapsack: ");
    scanf("%d", &capacity);

    float value[n], weight[n], ratio[n], max_value = 0.0;

    printf("Enter the values and weights of the items:\n");
    for (int i = 0; i < n; i++) {
        printf("Item %d: ", i + 1);
        scanf("%f %f", &value[i], &weight[i]);
        ratio[i] = value[i] / weight[i];
    }

    // Sort items by the ratio of value to weight in descending order
    for (int i = 0; i < n - 1; i++) {
        for (int j = 0; j < n - i - 1; j++) {
            if (ratio[j] < ratio[j + 1]) {
                float temp_ratio = ratio[j];
                ratio[j] = ratio[j + 1];
                ratio[j + 1] = temp_ratio;

                float temp_value = value[j];
                value[j] = value[j + 1];
                value[j + 1] = temp_value;

                float temp_weight = weight[j];
                weight[j] = weight[j + 1];
                weight[j + 1] = temp_weight;
            }
        }
    }

    int i = 0;
    while (capacity > 0 && i < n) {
        if (weight[i] <= capacity) {
            max_value += value[i];
            capacity -= weight[i];
        } else {
            max_value += (capacity / weight[i]) * value[i];
            capacity = 0;
        }
        i++;
    }

    printf("Maximum value in the knapsack: %.2f\n", max_value);
    return 0;
}
