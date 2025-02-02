import {
  Body,
  Controller,
  Delete,
  Get,
  Param,
  Post,
  Put,
  UseGuards,
} from '@nestjs/common';
import { JwtAuthGuard } from 'src/auth/jwt-auth.guard';
import { FoodsService } from './foods.service';
import { CreateFoodDto } from './dto/create-food.dto';
import { UpdateFoodDto } from './dto/update-food.dto';

@UseGuards(JwtAuthGuard)
@Controller('foods')
export class FoodsController {
  constructor(private foodService: FoodsService) {}

  @Post()
  createFood(@Body() createFoodDto: CreateFoodDto) {
    return this.foodService.createFood(createFoodDto);
  }

  @Put(':id')
  updateFood(@Body() updateFoodDto: UpdateFoodDto, @Param() params) {
    return this.foodService.updateFoodById(params.id, updateFoodDto);
  }

  @Delete(':id')
  deleteFood(@Param() params) {
    return this.foodService.removeFood(params.id);
  }

  @Get()
  listFood() {
    return this.foodService.findAllFood();
  }

  @Get(':id')
  getFood(@Param() params) {
    return this.foodService.findOneByFoodId(params.id);
  }
}
