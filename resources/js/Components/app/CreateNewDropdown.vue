<script setup>
import { Menu, MenuButton, MenuItems, MenuItem } from '@headlessui/vue'

</script>


<template>
    
      <Menu as="div" class="relative block text-left">

          <MenuButton
            class="inline-flex w-full justify-center rounded-md px-4 py-2 text-sm font-semibold text-gray-900 hover:bg-gray-50 shadow-sm ring-1 ring-inset ring-gray-300"
          >
          Create new
          </MenuButton>
        
  
        <transition
          enter-active-class="transition duration-100 ease-out"
          enter-from-class="transform scale-95 opacity-0"
          enter-to-class="transform scale-100 opacity-100"
          leave-active-class="transition duration-75 ease-in"
          leave-from-class="transform scale-100 opacity-100"
          leave-to-class="transform scale-95 opacity-0"
        >
          <MenuItems
            class="absolute left-0 mt-2 w-56 origin-top-right divide-y divide-gray-100 rounded-md bg-white shadow-lg ring-1 ring-black/5 focus:outline-none"
          >
            <div class="px-1 py-1">
              <MenuItem v-slot="{ active }">
                <a class="text-gray-700 block px-4 py-2 text-sm">
                    New Folder
                </a>
              </MenuItem>
            </div>
            <div class="px-1 py-1">
              <MenuItem v-slot="{ active }">
                <a class="text-gray-700 block px-4 py-2 text-sm">
                    Upload Folder
                </a>
              </MenuItem>
            </div>
            <div class="px-1 py-1">
                <MenuItem v-slot="{ active }">
                <a class="text-gray-700 block px-4 py-2 text-sm"> 
                    Upload Files
                </a>
                </MenuItem>
              </div>

            
          </MenuItems>
        </transition>
      </Menu>
</template>