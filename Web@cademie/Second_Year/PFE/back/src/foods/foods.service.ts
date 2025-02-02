import { Injectable } from '@nestjs/common';
import { InjectRepository } from '@nestjs/typeorm';
import { Food } from './food.entity';
import { Repository } from 'typeorm';
import { CreateFoodDto } from './dto/create-food.dto';
import { UpdateFoodDto } from './dto/update-food.dto';

@Injectable()
export class FoodsService {
  constructor(
    @InjectRepository(Food)
    private foodsRepository: Repository<Food>,
  ) {}

  findAllFood(): Promise<Food[]> {
    return this.foodsRepository.find();
  }

  createFood(createFoodDto: CreateFoodDto): Promise<Food> {
    const food = new Food();

    food.name = createFoodDto.name;

    return this.foodsRepository.save(food);
  }

  async removeFood(id: string): Promise<void> {
    await this.foodsRepository.delete(id);
  }

  async updateFoodById(
    foodId: number,
    updateFoodDto: UpdateFoodDto,
  ): Promise<Food> {
    const food = await this.foodsRepository.findOneBy({ id: foodId });

    food.name = updateFoodDto.name;

    return await this.foodsRepository.save(food);
  }

  findOneByFoodId(id: number): Promise<Food> {
    return this.foodsRepository.findOneBy({ id });
  }
}
