@csrf
<x-admin.model-input title="Art" name="art" :model="$product" type="text" required autofocus />
<x-admin.model-input title="Name" name="name" :model="$product" type="text" required />
<x-admin.model-select title="Status" name="status" :items="$statuses" :value="$product->status" :model="$product" />

<x-admin.model-input title="Brand" name="data[brand]" :setValue="$product->data['brand'] ?? ''" type="text" />
<x-admin.model-input title="Color" name="data[color]" :setValue="$product->data['color'] ?? ''" type="text" />
<x-admin.model-input title="Size" name="data[size]" :setValue="$product->data['size'] ?? ''" type="text" />

<input type="submit" value="Сохранить" class="btn btn-primary">
